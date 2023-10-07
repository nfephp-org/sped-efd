<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\Common\Keys;
use NFePHP\EFD\Common\Element;
use stdClass;

/**
 * REGISTRO C113: DOCUMENTO FISCAL REFERENCIADO
 * Este registro tem por objetivo informar, detalhadamente, outros documentos fiscais que tenham sido mencionados
 * nas informações complementares do documento que está sendo escriturado no registro C100, exceto cupons fiscais, que
 * devem ser informados no registro C114. Exemplos: nota fiscal de remessa
 * de mercadoria originária de venda para entrega futura e nota fiscal de devolução de compras.
 * @package NFePHP\EFD\Elements\ICMSIPI
 */
class C113 extends Element
{
    const REG = 'C113';
    const LEVEL = 4;
    const PARENT = 'C110';

    protected $parameters = [
        'IND_OPER' => [
            'type' => 'string',
            'regex' => '^[0-1]{1}$',
            'required' => true,
            'info' => 'Indicador do tipo de operação',
            'format' => ''
        ],
        'IND_EMIT' => [
            'type' => 'string',
            'regex' => '^[0-1]{1}$',
            'required' => true,
            'info' => 'Indicador do emitente do documento fiscal',
            'format' => ''
        ],
        'COD_PART' => [
            'type' => 'string',
            'regex' => '^.{1,60}$',
            'required' => true,
            'info' => 'Código do participante (campo 02 do Registro 0150):',
            'format' => ''
        ],
        'COD_MOD' => [
            'type' => 'string',
            'regex' => '^([A-Z0-9]{2})+$',
            'required' => true,
            'info' => 'Código do modelo do documento fiscalValor total do estoque',
            'format' => ''
        ],
        'SER' => [
            'type' => 'string',
            'regex' => '^([0-9a-z]{1,4})?$',
            'required' => false,
            'info' => 'Série do documento fiscal',
            'format' => ''
        ],
        'SUB' => [
            'type' => 'numeric',
            'regex' => '^[0-9]{3}$',
            'required' => false,
            'info' => 'Subsérie do documento fiscal',
            'format' => ''
        ],
        'NUM_DOC' => [
            'type' => 'numeric',
            'regex' => '^([0-9]{1,9})?$',
            'required' => true,
            'info' => 'Número do documento fiscal',
            'format' => ''
        ],
        'DT_DOC' => [
            'type'     => 'integer',
            'regex'    => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => false,
            'info'     => 'Data da emissão do documento fiscal',
            'format'   => ''
        ],
        'CHV_DOCE' => [
            'type' => 'numeric',
            'regex' => '^([0-9]{44})?$',
            'required' => false,
            'info' => 'Chave do Documento Eletrônico',
            'format' => ''
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
        if (in_array($this->std->cod_mod, ['2D', '02', '2E'])) {
            $this->errors[] = "[" . self::REG . "] " .
                "O código do documento fiscal (COD_MOD) deve ser diferente de 2D, 02 ou 2E";
        }
        if ($this->std->cod_mod == 57) {
            if (!Keys::isValid($this->std->chv_doce)) {
                $this->errors[] = "[" . self::REG . "] " .
                    "Chave do cocumento (CHV_DOCe) inválida";
            }
        }
    }
}
