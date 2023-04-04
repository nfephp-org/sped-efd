<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use stdClass;

class D365 extends Element
{
    const REG = 'D365';
    const LEVEL = 4;
    const PARENT = '';

    protected $parameters = [
        'COD_TOT_PAR' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{7}$',
            'required' => true,
            'info'     => 'Código do totalizador, conforme tabela 4.4.6',
            'format'   => ''
        ],
        'VLR_ACUM_TOT' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor acumulado no totalizador, relativo à respectiva Redução Z',
            'format'   => '15v2'
        ],
        'NR_TOT' => [
            'type'     => 'numeric',
            'regex'    => '^[0-9]{2}$',
            'required' => true,
            'info'     => 'Número do totalizador quando ocorrer mais de uma situação com a mesma carga'
            .' tributária efetiva',
            'format'   => ''
        ],
        'DESCR_NR_TOT' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{0}$',
            'required' => true,
            'info'     => 'Descrição da situação tributária relativa ao totalizador parcial, quando houver'
            .' mais de um com a mesma carga tributária efetiva',
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
