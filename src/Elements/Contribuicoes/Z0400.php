<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use stdClass;

class Z0400 extends Element
{
    const REG = '0400';
    const LEVEL = 3;
    const PARENT = '0100';

    protected $parameters = [
        'COD_NAT' => [
            'type' => 'string',
            'regex' => '^.{0,10}$',
            'required' => false,
            'info' => 'Código da natureza da operação/prestação',
            'format' => ''
        ],
        'DESCR_NAT' => [
            'type' => 'string',
            'regex' => '^(.*)$',
            'required' => false,
            'info' => 'Descrição da natureza da operação/prestação',
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
