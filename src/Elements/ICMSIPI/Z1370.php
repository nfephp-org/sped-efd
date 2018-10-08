<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class Z1370 extends Element implements ElementInterface
{
    const REG = '1370';
    const LEVEL = 3;
    const PARENT = '1350';

    protected $parameters = [
        'NUM_BICO' => [
            'type'     => 'integer',
            'regex'    => '^\d{1,3}$',
            'required' => true,
            'info'     => 'Número sequencial do bico ligado a bomba',
            'format'   => ''
        ],
        'COD_ITEM' => [
            'type'     => 'string',
            'regex'    => '^.{1,60}$',
            'required' => true,
            'info'     => 'Código do Produto, constante do registro 0200',
            'format'   => ''
        ],
        'NUM_TANQUE' => [
            'type'     => 'string',
            'regex'    => '^.{1,3}$',
            'required' => true,
            'info'     => 'Tanque que armazena o combustível.',
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
