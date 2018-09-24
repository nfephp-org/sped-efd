<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

/**
 * REGISTRO C110: INFORMAÇÃO COMPLEMENTAR DA NOTA FISCAL (CÓDIGO 01, 1B, 04 e 55).
 * @package NFePHP\EFD\Elements\ICMSIPI
 */
class C110 extends Element implements ElementInterface
{
    const REG = 'C110';
    const LEVEL = 3;
    const PARENT = 'C100';

    protected $parameters = [
        'COD_INF' => [
            'type' => 'string',
            'regex' => '^[A-z0-9]{1,6}$',
            'required' => true,
            'info' => 'Código da informação complementar do documento fiscal',
            'format' => ''
        ],
        'TXT_COMPL' => [
            'type' => 'string',
            'regex' => '^(.*)$',
            'required' => true,
            'info' => 'Descrição complementar do código de referência.',
            'format' => ''
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
