<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class Z0400 extends Element implements ElementInterface
{
    const REG = 'Z0400';
    const LEVEL = 3;
    const PARENT = 'Z0100';

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
     * @param \stdClass $std
     */
    public function __construct(\stdClass $std)
    {
        parent::__construct(self::REG);
        $this->std = $this->standarize($std);
    }
}
