<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use stdClass;

class I299 extends Element
{
    const REG = 'I299';
    const LEVEL = 4;
    const PARENT = 'I200';

    protected $parameters = [
        'NUM_PROC' => [
            'type' => 'string',
            'regex' => '',
            'required' => true,
            'info' => 'Identificação do processo ou ato concessório',
            'format' => ''
        ],
        'IND_PROC' => [
            'type' => 'string',
            'regex' => '^(1|3|9)$',
            'required' => true,
            'info' => 'Indicador da origem do processo: '
                . '1 - Justiça Federal; '
                . '3 – Secretaria da Receita Federal do Brasil; '
                . '9 – Outros.',
            'format' => ''
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
