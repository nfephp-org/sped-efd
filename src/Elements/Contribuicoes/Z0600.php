<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class Z0600 extends Element implements ElementInterface
{
    const REG = '0600';
    const LEVEL = 2;
    const PARENT = '0001';

    protected $parameters = [
        'DT_ALT' => [
            'type' => 'string',
            'regex' => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => false,
            'info' => 'Data da inclusão/alteração.',
            'format' => ''
        ],
        'COD_CCUS' => [
            'type' => 'string',
            'regex' => '^.{0,255}$',
            'required' => false,
            'info' => 'Código do centro de custos.',
            'format' => ''
        ],
        'CCUS' => [
            'type' => 'string',
            'regex' => '^.{0,60}$',
            'required' => false,
            'info' => 'Nome do centro de custos.',
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
