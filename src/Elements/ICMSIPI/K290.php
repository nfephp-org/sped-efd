<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use stdClass;

class K290 extends Element
{
    const REG = 'K290';
    const LEVEL = 3;
    const PARENT = 'K100';

    protected $parameters = [
        'DT_INI_OP' => [
            'type'     => 'string',
            'regex'    => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => false,
            'info'     => 'Data de início da ordem de produção',
            'format'   => ''
        ],
        'DT_FIN_OP' => [
            'type'     => 'string',
            'regex'    => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => false,
            'info'     => 'Data de conclusão da ordem de produção',
            'format'   => ''
        ],
        'COD_DOC_OP' => [
            'type'     => 'string',
            'regex'    => '^.{1,30}$',
            'required' => false,
            'info'     => 'Código de identificação da ordem de produção',
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
