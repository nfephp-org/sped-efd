<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class Z1360 extends Element implements ElementInterface
{
    const REG = '1360';
    const LEVEL = 3;
    const PARENT = '1350';

    protected $parameters = [
        'NUM_LACRE' => [
            'type'     => 'string',
            'regex'    => '^.{1,20}$',
            'required' => true,
            'info'     => 'Número do Lacre associado na Bomba',
            'format'   => ''
        ],
        'DT_APLICACAO' => [
            'type'     => 'integer',
            'regex'    => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => true,
            'info'     => 'Data de aplicação do Lacre',
            'format'   => ''
        ]
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
