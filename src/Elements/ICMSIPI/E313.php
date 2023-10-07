<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use stdClass;

class E313 extends Element
{
    const REG = 'E313';
    const LEVEL = 5;
    const PARENT = 'E311';

    protected $parameters = [
        'COD_PART' => [
            'type'     => 'string',
            'regex'    => '^.{1,60}$',
            'required' => true,
            'info'     => 'Código do participante (campo 02 do Registro 0150)',
            'format'   => ''
        ],
        'COD_MOD' => [
            'type'     => 'string',
            'regex'    => '^\d{2}$',
            'required' => true,
            'info'     => 'Código do modelo do documento fiscal, conforme a Tabela 4.1.1',
            'format'   => ''
        ],
        'SER' => [
            'type'     => 'string',
            'regex'    => '^\d{1,4}+$',
            'required' => false,
            'info'     => 'Série do documento fiscal',
            'format'   => ''
        ],
        'SUB' => [
            'type'     => 'integer',
            'regex'    => '^\d{1,3}+$',
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
            'info'     => 'Data da emissão do documento fiscal'                  ,
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
        'CHV_DOCE' => [
            'type'     => 'string',
            'regex'    => '^\d{44}+$',
            'required' => false,
            'info'     => 'Chave do Documento Eletrônico',
            'format'   => ''
        ]
    ];

    /**
     * Constructor
     * @param stdClass $std
     * @param stdClass $vigencia
     */
    public function __construct(stdClass $std, stdClass $vigencia = null)
    {
        parent::__construct(self::REG, $vigencia);
        $this->replaceParams( self::REG);
        $this->std = $this->standarize($std);
        $this->postValidation();
    }

    public function postValidation()
    {
        /*
         * Campo 10 (VL_AJ_ITEM) Validação: o valor informado no campo deve ser maior que “0” (zero).
         */
        if ($this->values->vl_aj_item <= 0) {
            $this->errors[] = "[" . self::REG . "] O valor informado no campo deve "
            . "ser maior que “0” (zero).";
        }
    }
}
