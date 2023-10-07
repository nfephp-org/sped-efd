<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use stdClass;

class C198 extends Element
{
    const REG = 'C198';
    const LEVEL = 4;
    const PARENT = 'C190';

    protected $parameters = [
        'NUM_PROC' => [
            'type' => 'string',
            'regex' => '^.{0,20}$',
            'required' => false,
            'info' => 'Identificação do processo ou ato concessório',
            'format' => ''
        ],
        'IND_PROC' => [
            'type' => 'string',
            'regex' => '^(1|2|9)$',
            'required' => false,
            'info' => 'Indicador da origem do processo:',
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
