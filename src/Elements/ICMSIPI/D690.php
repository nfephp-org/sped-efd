<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class D690 extends Element implements ElementInterface
{
    const REG = 'D690';
    const LEVEL = 3;
    const PARENT = '';

    protected $parameters = [
        'CST_ICMS' => [
            'type'     => 'numeric',
            'regex' => '^(\d{3})$',
            'required' => true,
            'info'     => 'Código da Situação Tributária, conforme a tabela indicada no item 4.3.1',
            'format'   => ''
        ],
        'CFOP' => [
            'type'     => 'numeric',
            'regex' => '^(\d{4})$',
            'required' => true,
            'info'     => 'Código Fiscal de Operação e Prestação, conforme a tabela indicada no item 4.2.2',
            'format'   => ''
        ],
        'ALIQ_ICMS' => [
            'type'     => 'numeric',
            'regex'    => '^[0-9]{6}$',
            'required' => true,
            'info'     => 'Alíquota do ICMS',
            'format'   => ''
        ],
        'VL_OPR' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor da operação correspondente à combinação de CST_ICMS, CFOP e alíquota do ICMS,'
            .' incluídas as despesas acessórias e acréscimos',
            'format'   => '15v2'
        ],
        'VL_BC_ICMS' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Parcela correspondente ao Valor da base de cálculo do ICMS referente à combinação '
            .'CST_ICMS, CFOP e alíquota do ICMS',
            'format'   => '15v2'
        ],
        'VL_ICMS' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Parcela correspondente ao Valor do ICMS referente à combinação CST_ICMS, '
            .'CFOP e alíquota do ICMS',
            'format'   => '15v2'
        ],
        'VL_BC_ICMS_UF' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Parcela correspondente ao valor da base de cálculo do ICMS de outras UFs, referente'
            .' à combinação de CST_ICMS, CFOP e alíquota do ICMS',
            'format'   => '15v2'
        ],
        'VL_ICMS_UF' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Parcela correspondente ao valor do ICMS de outras UFs, referente à combinação',
            'format'   => '15v2'
        ],
        'VL_RED_BC' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor não tributado em função da redução da base de cálculo do ICMS, referente à combinação'
            .' de CST_ICMS, CFOP e alíquota do ICMS',
            'format'   => '15v2'
        ],
        'COD_OBS' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{6}$',
            'required' => true,
            'info'     => 'Código da observação do lançamento fiscal (campo 02 do Registro 0460)',
            'format'   => ''
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
