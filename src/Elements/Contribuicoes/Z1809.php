<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class Z1809 extends Element implements ElementInterface
{
    const REG = '1809';
    const LEVEL = 3;
    const PARENT = '1800';

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
     * @param \stdClass $std
     */
    public function __construct(\stdClass $std)
    {
        parent::__construct(self::REG);
        $this->std = $this->standarize($std);
    }
}
