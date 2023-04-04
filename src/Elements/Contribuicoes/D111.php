<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use stdClass;

class D111 extends Element
{
    const REG = 'D111';
    const LEVEL = 4;
    const PARENT = 'D100';

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
            'info' => 'Indicador da origem do processo ' .
                ' 1 - Justiça Federal ' .
                ' 3 – Secretaria da Receita Federal do Brasil 9 – Outros. ',
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
