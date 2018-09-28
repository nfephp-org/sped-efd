<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class E520 extends Element implements ElementInterface
{
    const REG = 'E520';
    const LEVEL = 3;
    const PARENT = 'E100';

    protected $parameters = [
        'VL_SD_ANT_IPI' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Saldo credor do IPI transferido do período anterior',
            'format'   => '15v2'
        ],
        'VL_DEB_IPI' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total dos débitos por "Saídas com débito do imposto"',
            'format'   => '15v2'
        ],
        'VL_CRED_IPI' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total dos créditos por "Entradas e aquisições com crédito do imposto"',
            'format'   => '15v2'
        ],
        'VL_OD_IPI' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor de "Outros débitos" do IPI (inclusive estornos de crédito)',
            'format'   => '15v2'
        ],
        'VL_OC_IPI' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor de "Outros créditos" do IPI (inclusive estornos de débitos)',
            'format'   => '15v2'
        ],
        'VL_SC_IPI' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor do saldo credor do IPI a transportar para o período seguinte',
            'format'   => '15v2'
        ],
        'VL_SD_IPI' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor do saldo devedor do IPI a recolher',
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
