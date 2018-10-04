<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class E531 extends Element implements ElementInterface
{
    const REG = 'E531';
    const LEVEL = 5;
    const PARENT = 'E530';

    protected $parameters = [
        'COD_PART' => [
            'type'     => 'string',
            'regex'    => '^.{1,60}$',
            'required' => false,
            'info'     => 'Código do participante (campo 02 do Registro 0150): '
            .'- do emitente do documento ou do remetente das mercadorias, no caso de entradas; '
            .'- do adquirente, no caso de saídas',
            'format'   => ''
        ],
        'COD_MOD' => [
            'type'     => 'string',
            'regex'    => '^(0)(1)|55$',
            'required' => true,
            'info'     => 'Código do modelo do documento fiscal, conforme a Tabela 4.1.1',
            'format'   => ''
        ],
        'SER' => [
            'type'     => 'string',
            'regex'    => '^.{1,4}$',
            'required' => false,
            'info'     => 'Série do documento fiscal',
            'format'   => ''
        ],
        'SUB' => [
            'type'     => 'integer',
            'regex'    => '^.{1,3}$',
            'required' => false,
            'info'     => 'Subsérie do documento fiscal',
            'format'   => ''
        ],
        'NUM_DOC' => [
            'type'     => 'integer',
            'regex'    => '^([1-9])([0-9]{1,8}|)$',
            'required' => true,
            'info'     => 'Número do documento fiscal',
            'format'   => ''
        ],
        'DT_DOC' => [
            'type'     => 'integer',
            'regex'    => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => true,
            'info'     => 'Data da emissão do documento fiscal',
            'format'   => ''
        ],
        'COD_ITEM' => [
            'type'     => 'string',
            'regex'    => '^.{1,60}$',
            'required' => false,
            'info'     => 'Código do item (campo 02 do Registro 0200)',
            'format'   => ''
        ],
        'VL_AJ_ITEM' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor do ajuste para a operação/item',
            'format'   => '15v2'
        ],
        'CHV_NFE' => [
            'type'     => 'numeric',
            'regex'    => '^([0-9]{44})?$',
            'required' => false,
            'info'     => 'Chave da Nota Fiscal Eletrônica (modelo 55)',
            'format'   => ''
        ]
    ];

    /**
     * Constructor
     * @param \stdClass $std
     */
    public function __construct(\stdClass $std)
    {
        parent::__construct(self::REG);
        $this->std = $this->standarize($std);
        $this->postValidation();
    }

    public function postValidation()
    {
        /*
         * Campo 10 (CHV_NFE) Validação: A informação da chave é obrigatória quando o COD_MOD = “55”.
         */
        if ($this->std->cod_mod == '55' && empty($this->std->chv_nfe)) {
            throw new \InvalidArgumentException("[" . self::REG . "] A informação da chave é obrigatória "
            ."quando o COD_MOD = “55”.");
        }
    }
}
