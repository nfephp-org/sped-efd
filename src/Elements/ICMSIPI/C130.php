<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class C130 extends Element implements ElementInterface
{
    const REG = 'C130';
    const LEVEL = 3;
    const PARENT = 'C100';

    protected $parameters = [
        'VL_SERV_NT' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Valor dos serviços sob não-incidência ou nãotributados pelo ICMS',
            'format' => '15v2'
        ],
        'VL_BC_ISSQN' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Valor da base de cálculo do ISSQN',
            'format' => '15v2'
        ],
        'VL_ISSQN' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor do ISSQN',
            'format' => '15v2'
        ],
        'VL_BC_IRRF' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor da base de cálculo do Imposto de Renda Retido na Fonte',
            'format' => '15v2'
        ],
        'VL_ IRRF' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor do Imposto de Renda - Retido na Fonte',
            'format' => '15v2'
        ],
        'VL_BC_PREV' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor da base de cálculo de retenção da Previdência Social',
            'format' => '15v2'
        ],
        'VL_PREV' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor destacado para retenção da Previdência Social',
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
