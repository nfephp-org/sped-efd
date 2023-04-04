<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use stdClass;

class E510 extends Element
{
    const REG = 'E510';
    const LEVEL = 3;
    const PARENT = 'E500';

    protected $parameters = [
        'CFOP' => [
            'type'     => 'integer',
            'regex'    => '^\d{4}$',
            'required' => true,
            'info'     => 'Código Fiscal de Operação e Prestação do agrupamento de itens',
            'format'   => ''
        ],
        'CST_IPI' => [
            'type'     => 'string',
            'regex'    => '^\d{2}$',
            'required' => true,
            'info'     => 'Código da Situação Tributária referente ao IPI, '
            .'conforme a Tabela indicada no item 4.3.2.',
            'format'   => ''
        ],
        'VL_CONT_IPI' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Parcela correspondente ao "Valor Contábil" referente ao CFOP '
            .'e ao Código de Tributação do IPI',
            'format'   => '15v2'
        ],
        'VL_BC_IPI' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Parcela correspondente ao "Valor da base de cálculo do IPI" '
            .'referente ao CFOP e ao Código de Tributação do IPI, para operações tributadas',
            'format'   => '15v2'
        ],
        'VL_IPI' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Parcela correspondente ao "Valor do IPI" '
            .'referente ao CFOP e ao Código de Tributação do IPI, '
            .'para operações tributadas',
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
