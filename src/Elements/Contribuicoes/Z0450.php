<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class Z0450 extends Element implements ElementInterface
{
    const REG = 'Z0450';
    const LEVEL = 3;
    const PARENT = 'Z0400';

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
            'info' => 'Texto&nbsp;&nbsp; livre&nbsp;&nbsp; da&nbsp;&nbsp; informação&nbsp;&nbsp; complementar&nbsp;&nbsp; existente&nbsp;&nbsp; no documento&nbsp; fiscal,&nbsp; inclusive&nbsp; espécie&nbsp; de&nbsp; normas&nbsp; legais,&nbsp; poder normativo,&nbsp; número,&nbsp; capitulação,&nbsp; data&nbsp; e&nbsp; demais&nbsp; referências pertinentes com indicação referentes ao tributo.',
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
