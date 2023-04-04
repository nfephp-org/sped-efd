<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use stdClass;

class D411 extends Element
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
