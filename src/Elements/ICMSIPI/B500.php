<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use stdClass;

class B500 extends Element
{
    const REG = 'B500';
    const LEVEL = 2;
    const PARENT = 'B001';

    protected $parameters = [
        'VL_REC' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor mensal das receitas auferidas pela sociedade uniprofissional',
            'format'   => '15v2'
        ],
        'QTD_PROF' => [
            'type'     => 'integer',
            'regex'    => '^\d+$',
            'required' => true,
            'info'     => 'Quantidade de profissionais habilitados',
            'format'   => ''
        ],
        'VL_OR' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor do ISS devido',
            'format'   => '15v2'
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
