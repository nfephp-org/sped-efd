<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

/**
 * REGISTRO C172: OPERAÇÕES COM ISSQN (CÓDIGO 01)
 * Este registro tem por objetivo informar dados da prestação de serviços
 * @package NFePHP\EFD\Elements\ICMSIPI
 */
class C172 extends Element implements ElementInterface
{
    const REG = 'C172';
    const LEVEL = 4;
    const PARENT = 'C170';

    protected $parameters = [
        'VL_BC_ISSQN' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor da base de cálculo do ISSQN',
            'format' => '15v2'
        ],
        'ALIQ_ISSQN' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Alíquota do ISSQN',
            'format' => '6v2'
        ],
        'VL_ISSQN' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor do ISSQN',
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
