<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use stdClass;

/**
 * REGISTRO C110: INFORMAÇÃO COMPLEMENTAR DA NOTA FISCAL (CÓDIGO 01, 1B, 04 e 55).
 * @package NFePHP\EFD\Elements\ICMSIPI
 */
class C110 extends Element
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
            'required' => false,
            'info' => 'Descrição complementar do código de referência.',
            'format' => ''
        ]
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
