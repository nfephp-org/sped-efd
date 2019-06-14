<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class E200 extends Element implements ElementInterface
{
    const REG = 'E200';
    const LEVEL = 2;
    const PARENT = 'E001';

    protected $parameters = [
        'UF' => [
            'type'     => 'string',
            'regex'    => '^[a-zA-Z]{2}$',
            'required' => true,
            'info'     => 'Sigla da unidade da federação a que se refere a apuração do ICMS ST',
            'format'   => ''
        ],
        'DT_INI' => [
            'type'     => 'string',
            'regex'    => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => true,
            'info'     => 'Data inicial a que a apuração se refere',
            'format'   => ''
        ],
        'DT_FIN' => [
            'type'     => 'string',
            'regex'    => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => true,
            'info'     => 'Data final a que a apuração se refere',
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
