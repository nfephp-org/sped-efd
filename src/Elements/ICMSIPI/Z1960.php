<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use stdClass;

class Z1960 extends Element
{
    const REG = '1960';
    const LEVEL = 2;
    const PARENT = '1001';

    protected $parameters = [
        'IND_AP' => [
            'type'     => 'integer',
            'regex'    => '^\d{2}$',
            'required' => true,
            'info'     => 'Indicador da sub-apuração por tipo de benefício (conforme tabela 4.7.1)',
            'format'   => ''
        ],
        'G1_01' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Percentual de crédito presumido',
            'format'   => '15v2'
        ],
        'G1_02' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Saídas não incentivadas de PI',
            'format'   => '15v2'
        ],
        'G1_03' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Saídas incentivadas de PI',
            'format'   => '15v2'
        ],
        'G1_04' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Saídas incentivadas de PI para fora do Nordeste',
            'format'   => '15v2'
        ],
        'G1_05' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Saldo devedor do ICMS antes das deduções do incentivo',
            'format'   => '15v2'
        ],
        'G1_06' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Saldo devedor do ICMS relativo à faixa incentivada de PI',
            'format'   => '15v2'
        ],
        'G1_07' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Crédito presumido nas saídas incentivadas de PI para fora do Nordeste',
            'format'   => '15v2'
        ],
        'G1_08' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Saldo devedor relativo à faixa incentivada de PI após o '
            .'crédito presumido nas saídas para fora do Nordeste',
            'format'   => '15v2'
        ],
        'G1_09' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Crédito presumido',
            'format'   => '15v2'
        ],
        'G1_10' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Dedução de incentivo da Indústria (crédito presumido)',
            'format'   => '15v2'
        ],
        'G1_11' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Saldo devedor do ICMS após deduções',
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
