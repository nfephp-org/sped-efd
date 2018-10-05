<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class M350 extends Element implements ElementInterface
{
    const REG = 'M350';
    const LEVEL = 2;
    const PARENT = 'M300';

    protected $parameters = [
        'VL_TOT_FOL' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor Total da Folha de Salários ',
            'format' => '15v2'
        ],
        'VL_EXC_BC' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor Total das Exclusões à Base de Cálculo ',
            'format' => '15v2'
        ],
        'VL_TOT_BC' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor Total da Base de Cálculo ',
            'format' => '15v2'
        ],
        'ALIQ_PIS_FOL' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Alíquota do PIS/PASEP – Folha de Salários ',
            'format' => '6v2'
        ],
        'VL_TOT_CONT_FOL' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor Total da Contribuição Social sobre a Folha de Salários ',
            'format' => '15v2'
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
