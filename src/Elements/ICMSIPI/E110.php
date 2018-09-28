<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class E110 extends Element implements ElementInterface
{
    const REG = 'E110';
    const LEVEL = 3;
    const PARENT = 'E100';

    protected $parameters = [
        'VL_TOT_DEBITOS' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total dos débitos por "Saídas e prestações com débito do imposto"',
            'format'   => '15v2'
        ],
        'VL_AJ_DEBITOS' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total dos ajustes a débito decorrentes do documento fiscal.',
            'format'   => '15v2'
        ],
        'VL_ESTORNOS_CRED' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total de Ajustes “Estornos de créditos”',
            'format'   => '15v2'
        ],
        'VL_TOT_CREDITOS' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total dos créditos por "Entradas e aquisições com crédito do imposto"',
            'format'   => '15v2'
        ],
        'VL_AJ_CREDITOS' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total dos ajustes a crédito decorrentes do documento fiscal.',
            'format'   => '15v2'
        ],
        'VL_TOT_AJ_CREDITOS' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total de "Ajustes a crédito"',
            'format'   => '15v2'
        ],
        'VL_ESTORNOS_DEB' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total de Ajustes “Estornos de Débitos”',
            'format'   => '15v2'
        ],
        'VL_SLD_CREDOR_ANT' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total de "Saldo credor do período anterior"',
            'format'   => '15v2'
        ],
        'VL_SLD_APURADO' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor do saldo devedor apurado',
            'format'   => '15v2'
        ],
        'VL_TOT_DED' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total de "Deduções"',
            'format'   => '15v2'
        ],
        'VL_ICMS_RECOLHER' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total de "ICMS a recolher (11-12)',
            'format'   => '15v2'
        ],
        'VL_SLD_CREDOR_TRANSPORTAR' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total de "Saldo credor a transportar para o período seguinte”',
            'format'   => '15v2'
        ],
        'DEB_ESP' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valores recolhidos ou a recolher, extra apuração.',
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
