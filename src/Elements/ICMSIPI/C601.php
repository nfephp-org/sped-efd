<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class C601 extends Element implements ElementInterface
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
     * @param \stdClass $std
     */
    public function __construct(\stdClass $std)
    {
        parent::__construct(self::REG);
        $this->std = $this->standarize($std);
    }
}
