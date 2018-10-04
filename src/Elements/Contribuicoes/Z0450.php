<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class Z0450 extends Element implements ElementInterface
{
    const REG = '0450';
    const LEVEL = 3;
    const PARENT = '0400';

    protected $parameters = [
        'COD_INF' => [
            'type' => 'string',
            'regex' => '^.{0,6}$',
            'required' => false,
            'info' => 'Código da informação complementar do documento fiscal.',
            'format' => ''
        ],
        'TXT' => [
            'type' => 'string',
            'regex' => '^(.*)$',
            'required' => false,
            'info' => 'Texto livre da informação complementar existente no documento fiscal, 
            inclusive espécie de normas legais, poder normativo, número, capitulação, data e 
            demais referências pertinentes com indicação referentes ao tributo.',
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
