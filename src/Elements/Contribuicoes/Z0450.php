<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use stdClass;

class Z0450 extends Element
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
