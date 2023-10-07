<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use stdClass;

class E300 extends Element
{
    const REG = 'E300';
    const LEVEL = 2;
    const PARENT = 'E001';

    protected $parameters = [
        'UF' => [
            'type'     => 'string',
            'regex'    => '^.{1,2}$',
            'required' => true,
            'info'     => 'Sigla da unidade da federação a que se refere à apuração '
            .'do FCP e do ICMS Diferencial de Alíquota da UF de Origem/Destino',
            'format'   => ''
        ],
        'DT_INI' => [
            'type'     => 'integer',
            'regex'    => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => true,
            'info'     => 'Data inicial a que a apuração se refere',
            'format'   => ''
        ],
        'DT_FIN' => [
            'type'     => 'integer',
            'regex'    => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => true,
            'info'     => 'Data final a que a apuração se refere',
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
