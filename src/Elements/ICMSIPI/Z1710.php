<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use stdClass;

class Z1710 extends Element
{
    const REG = '1710';
    const LEVEL = 3;
    const PARENT = '1700';

    protected $parameters = [
        'NUM_DOC_INI' => [
            'type'     => 'integer',
            'regex'    => '^\d{1,12}$',
            'required' => true,
            'info'     => 'Número do dispositivo autorizado (inutilizado) inicial',
            'format'   => ''
        ],
        'NUM_DOC_FIN' => [
            'type'     => 'integer',
            'regex'    => '^\d{1,12}$',
            'required' => true,
            'info'     => 'Número do dispositivo autorizado (inutilizado) final',
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
