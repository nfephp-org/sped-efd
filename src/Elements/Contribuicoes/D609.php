<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;

class D609 extends Element implements ElementInterface
{
    const REG = 'D609';
    const LEVEL = 4;
    const PARENT = 'D600';

    protected $parameters = [
        'NUM_PROC' => [
            'type' => 'string',
            'regex' => '^.{0,20}$',
            'required' => false,
            'info' => 'Identificação do processo ou ato concessório ',
            'format' => ''
        ],
        'IND_PROC' => [
            'type' => 'string',
            'regex' => '^(1|3|9)$',
            'required' => false,
            'info' => 'Indicador da origem do processo',
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
