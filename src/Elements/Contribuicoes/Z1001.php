<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use stdClass;

class Z1001 extends Element
{
    const REG = '1001';
    const LEVEL = 2;
    const PARENT = '0000';

    protected $parameters = [
        'IND_MOV' => [
            'type' => 'numeric',
            'regex' => '^(0|1)$',
            'required' => false,
            'info' => 'Indicador de movimento ' .
                ' 0 - Bloco com dados informados ' .
                ' 1 - Bloco sem dados informados ',
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
