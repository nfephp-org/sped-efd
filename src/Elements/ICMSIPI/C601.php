<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use stdClass;

class C601 extends Element
{
    const REG = 'C601';
    const LEVEL = 3;
    const PARENT = 'C600';

    protected $parameters = [
        'NUM_DOC_CANC' => [
            'type' => 'numeric',
            'regex' => '^([1-9]{1})(\d{1,8})?$',
            'required' => true,
            'info' => 'Número do documento fiscal cancelado',
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
