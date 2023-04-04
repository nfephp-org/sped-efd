<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use stdClass;

class D590 extends Element
{
    const REG = 'D590';
    const LEVEL = 3;
    const PARENT = '';

    protected $parameters = [
        'CST_ICMS' => [
            'type' => 'numeric',
            'regex' => '^(\d{3})$',
            'required' => true,
            'info' => 'Código da Situação Tributária, conforme a Tabela indicada no item 4.3.1.',
            'format' => ''
        ],
        'CFOP' => [
            'type' => 'numeric',
            'regex' => '^(\d{4})$',
            'required' => true,
            'info' => 'Código Fiscal de agrupamento de itens',
            'format' => ''
        ],
        'ALIQ_ICMS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Alíquota do ICMS',
            'format' => '6v2'
        ],
        'VL_OPR' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Valor da operação correspondente à combinação de CST_ICMS, CFOP, e alíquota do ICMS.',
            'format' => '15v2'
        ],
        'VL_BC_ICMS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Parcela correspondente ao "Valor da base de cálculo do ICMS"
            referente à combinação de CST_ICMS, CFOP e alíquota do ICMS.',
            'format' => '15v2'
        ],
        'VL_ICMS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Parcela correspondente ao "Valor do ICMS" referente à combinação
            de CST_ICMS, CFOP e alíquota do ICMS.',
            'format' => '15v2'
        ],
        'VL_BC_ICMS_UF' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Parcela correspondente ao valor da base de cálculo do ICMS de outras UFs,
            referente à combinação de CST_ICMS, CFOP e alíquota do ICMS.',
            'format' => '15v2'
        ],
        'VL_ICMS_UF' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Parcela correspondente ao valor do ICMS de outras UFs, referente à combinação
            de CST_ICMS, CFOP, e alíquota do ICMS.',
            'format' => '15v2'
        ],
        'VL_RED_BC' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Valor não tributado em função da redução da base de cálculo do ICMS,
            referente à combinação de CST_ICMS, CFOP e alíquota do ICMS.',
            'format' => '15v2'
        ],
        'COD_OBS' => [
            'type' => 'string',
            'regex' => '^.{0,6}$',
            'required' => false,
            'info' => 'Código da observação do lançamento fiscal (campo 02 do Registro 0460)',
            'format' => ''
        ],

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
