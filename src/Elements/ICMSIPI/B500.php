<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class B500 extends Element implements ElementInterface
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
     * @param \stdClass $std
     */
    public function __construct(\stdClass $std)
    {
        parent::__construct(self::REG);
        $this->std = $this->standarize($std);
    }
}
