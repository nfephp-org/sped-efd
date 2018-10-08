<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class Z1800 extends Element implements ElementInterface
{
    const REG = '1800';
    const LEVEL = 2;
    const PARENT = '1001';

    protected $parameters = [
        'VL_CARGA' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor das prestações cargas (Tributado)',
            'format'   => '15v2'
        ],
        'VL_PASS' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor das prestações passageiros/cargas (Não Tributado)',
            'format'   => '15v2'
        ],
        'VL_FAT' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total do faturamento (2+3)',
            'format'   => '15v2'
        ],
        'IND_RAT' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Índice para rateio(2 / 4)',
            'format'   => '8v6'
        ],
        'VL_ICMS_ANT' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total dos créditos do ICMS',
            'format'   => '15v2'
        ],
        'VL_BC_ICMS' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor da base de cálculo do ICMS',
            'format'   => '15v2'
        ],
        'VL_ICMS_APUR' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor do ICMS apurado no cálculo (5 x 6)',
            'format'   => '15v2'
        ],
        'VL_BC_ICMS_APUR' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor da base de cálculo do ICMS apurada (5 x 7)',
            'format'   => '15v2'
        ],
        'VL_DIF' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor da diferença a ser levada a estorno de crédito na apuração (6 - 8)',
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
