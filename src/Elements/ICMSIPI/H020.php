<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class H020 extends Element implements ElementInterface
{
    const REG = 'H020';
    const LEVEL = 2;
    const PARENT = 'H010';
    
    protected $parameters = [
        'CST_ICMS' => [
            'type'     => '',
            'regex'    => '',
            'required' => true,
            'info'     => '',
            'format'   => ''
        ],
        'BC_ICMS' => [
            'type'     => '',
            'regex'    => '',
            'required' => true,
            'info'     => '',
            'format'   => ''
        ],
        'VL_ICMS' => [
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
