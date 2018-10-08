<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class Z1710 extends Element implements ElementInterface
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
     * @param \stdClass $std
     */
    public function __construct(\stdClass $std)
    {
        parent::__construct(self::REG);
        $this->std = $this->standarize($std);
    }
}
