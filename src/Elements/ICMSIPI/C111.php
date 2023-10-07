<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use stdClass;

/**
 * REGISTRO C111: PROCESSO REFERENCIADO
 * @package NFePHP\EFD\Elements\ICMSIPI
 */
class C111 extends Element
{
    const REG = 'C111';
    const LEVEL = 4;
    const PARENT = 'C110';

    protected $parameters = [
        'NUM_PROC' => [
            'type' => 'string',
            'regex' => '^[A-z0-9]{1,15}$',
            'required' => true,
            'info' => 'Identificação do processo ou ato concessório',
            'format' => ''
        ],
        'IND_PROC' => [
            'type' => 'string',
            'regex' => '^(0|1|2|3|9)$',
            'required' => true,
            'info' => 'Indicador da origem do processo',
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
