<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use stdClass;

/**
 * REGISTRO C114: CUPOM FISCAL REFERENCIADO
 * Este registro será utilizado para informar, detalhadamente, nas operações de saídas, cupons fiscais que tenham sido
 * mencionados nas informações complementares do documento que está sendo escriturado no registro C100. Nas operações de
 * entradas, somente informar quando o emitente do cupom fiscal for o próprio informante do arquivo.
 * @package NFePHP\EFD\Elements\ICMSIPI
 */
class C114 extends Element
{
    const REG = 'C114';
    const LEVEL = 4;
    const PARENT = 'C110';

    protected $parameters = [
        'COD_MOD' => [
            'type' => 'string',
            'regex' => '^(02|2D|2E)+$',
            'required' => true,
            'info' => 'Código do modelo do documento fiscalValor total do estoque',
            'format' => ''
        ],
        'ECF_FAB' => [
            'type' => 'string',
            'regex' => '^[A-z0-9]{1,21}+$',
            'required' => true,
            'info' => 'Número de série de fabricação do ECF',
            'format' => ''
        ],
        'ECF_CX' => [
            'type' => 'numeric',
            'regex' => '^[1-9]{1}([0-9]{1,2})?+$',
            'required' => true,
            'info' => 'Número do caixa atribuído ao ECF',
            'format' => ''
        ],
        'NUM_DOC' => [
            'type' => 'numeric',
            'regex' => '^[1-9]{1}([0-9]{1,8})?+$',
            'required' => true,
            'info' => 'Número do documento fiscal',
            'format' => ''
        ],
        'DT_DOC' => [
            'type' => 'string',
            'regex' => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => true,
            'info' => 'Data da emissão do documento fiscal',
            'format' => ''
        ],
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
}
