<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use stdClass;

class Z1390 extends Element
{
    const REG = '1390';
    const LEVEL = 2;
    const PARENT = '1001';

    protected $parameters = [
        'COD_PROD' => [
            'type'     => 'string',
            'regex'    => '^0[1|2|3]$',
            'required' => true,
            'info'     => 'Código do produto: '
            .'01 – Álcool Etílico Hidratado Carburante '
            .'02 - Álcool Etílico Anidro Carburante '
            .'03 – Açúcar',
            'format'   => ''
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
