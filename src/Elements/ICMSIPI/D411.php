<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class D411 extends Element implements ElementInterface
{
    const REG = 'D411';
    const LEVEL = 4;
    const PARENT = '';

    protected $parameters = [
        'NUM_DOC_CANC' => [
            'type'     => 'numeric',
            'regex'    => '^[0-9]{0,9}$',
            'required' => true,
            'info'     => 'Número do documento fiscal cancelado',
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
