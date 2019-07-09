<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class K290 extends Element implements ElementInterface
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
     * @param \stdClass $std
     */
    public function __construct(\stdClass $std)
    {
        parent::__construct(self::REG);
        $this->std = $this->standarize($std);
    }
}
