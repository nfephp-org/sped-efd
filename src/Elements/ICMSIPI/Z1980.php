<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use stdClass;

class Z1980 extends Element
{
    const REG = '1980';
    const LEVEL = 2;
    const PARENT = '1001';

    protected $parameters = [
        'IND_AP' => [
            'type'     => 'integer',
            'regex'    => '^\d{2}$',
            'required' => true,
            'info'     => 'Indicador da sub-apuração por tipo de benefício (conforme Tabela 4.7.1)',
            'format'   => ''
        ],
        'G4_01' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Entradas (percentual de incentivo)',
            'format'   => '15v2'
        ],
        'G4_02' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Entradas não incentivadas de PI',
            'format'   => '15v2'
        ],
        'G4_03' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Entradas incentivadas de PI',
            'format'   => '15v2'
        ],
        'G4_04' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Saídas (percentual de incentivo)',
            'format'   => '15v2'
        ],
        'G4_05' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Saídas não incentivadas de PI',
            'format'   => '15v2'
        ],
        'G4_06' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Saídas incentivadas de PI',
            'format'   => '15v2'
        ],
        'G4_07' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Saldo devedor do ICMS antes das deduções do incentivo (PI e itens não incentivados)',
            'format'   => '15v2'
        ],
        'G4_08' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Crédito presumido nas entradas incentivadas de PI',
            'format'   => '15v2'
        ],
        'G4_09' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Crédito presumido nas saídas incentivadas de PI',
            'format'   => '15v2'
        ],
        'G4_10' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Dedução de incentivo da Central de Distribuição (entradas/saídas)',
            'format'   => '15v2'
        ],
        'G4_11' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Saldo devedor do ICMS após deduções do incentivo',
            'format'   => '15v2'
        ],
        'G4_12' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Índice de recolhimento da central de distribuição',
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
