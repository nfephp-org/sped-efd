<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class H010 extends Element implements ElementInterface
{
    const REG = 'H010';
    const LEVEL = 2;
    const PARENT = 'H005';
    
    protected $parameters = [
        'COD_ITEM' => [
            'type'     => '',
            'regex'    => '',
            'required' => true,
            'info'     => '',
            'format'   => ''
        ],
        'UNID' => [
            'type'     => '',
            'regex'    => '',
            'required' => true,
            'info'     => '',
            'format'   => ''
        ],
        'QTD' => [
            'type'     => '',
            'regex'    => '',
            'required' => true,
            'info'     => '',
            'format'   => ''
        ],
        'VL_UNIT' => [
            'type'     => '',
            'regex'    => '',
            'required' => true,
            'info'     => '',
            'format'   => ''
        ],
        'VL_ITEM' => [
            'type'     => '',
            'regex'    => '',
            'required' => true,
            'info'     => '',
            'format'   => ''
        ],
        'IND_PROP' => [
            'type'     => '',
            'regex'    => '',
            'required' => true,
            'info'     => '',
            'format'   => ''
        ],
        'COD_PART' => [
            'type'     => '',
            'regex'    => '',
            'required' => true,
            'info'     => '',
            'format'   => ''
        ],
        'TXT_COMPL' => [
            'type'     => '',
            'regex'    => '',
            'required' => true,
            'info'     => '',
            'format'   => ''
        ],
        'COD_CTA' => [
            'type'     => '',
            'regex'    => '',
            'required' => true,
            'info'     => '',
            'format'   => ''
        ],
        'VL_ITEM_IR' => [
            'type'     => '',
            'regex'    => '',
            'required' => true,
            'info'     => '',
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
