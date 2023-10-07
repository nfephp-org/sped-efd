<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use stdClass;

class K270 extends Element
{
    const REG = 'K270';
    const LEVEL = 3;
    const PARENT = 'K100';

    protected $parameters = [
        'DT_INI_AP' => [
            'type'     => 'string',
            'regex'    => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => true,
            'info'     => 'Data inicial do período de apuração',
            'format'   => ''
        ],
        'DT_FIN_AP' => [
            'type'     => 'string',
            'regex'    => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => true,
            'info'     => 'Data final do período de apuração',
            'format'   => ''
        ],
        'COD_OP_OS' => [
            'type'     => 'string',
            'regex'    => '^.{1,30}$',
            'required' => false,
            'info'     => 'Código de identificação da ordem de produção',
            'format'   => ''
        ],
        'COD_ITEM' => [
            'type'     => 'string',
            'regex'    => '^.{1,60}$',
            'required' => true,
            'info'     => 'Código do item (campo 02 do Registro 0200)',
            'format'   => ''
        ],
        'QTD_COR_POS' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Quantidade de correção positiva de apontamento',
            'format'   => '15v3'
        ],
        'QTD_COR_NEG' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Quantidade de correção negativa de apontamento',
            'format'   => '15v3'
        ],
        'ORIGEM' => [
            'type'     => 'string',
            'regex'    => '^[1-9]{}1$',
            'required' => true,
            'info'     => 'Codigo de origem',
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
}
