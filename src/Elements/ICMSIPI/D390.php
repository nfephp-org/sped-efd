<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use stdClass;

class D390 extends Element
{
    const REG = 'D390';
    const LEVEL = 4;
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
            'info'     => 'Código Fiscal de Operação e Prestação',
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
        'VL_BC_ISSQN' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor da base de cálculo do ISSQN',
            'format'   => '15v2'
        ],
        'ALIQ_ISSQN' => [
            'type'     => 'numeric',
            'regex'    => '^[0-9]{6}$',
            'required' => true,
            'info'     => 'Alíquota do ISSQN',
            'format'   => ''
        ],
        'VL_ISSQN' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor do ISSQN',
            'format'   => '15v2'
        ],
        'VL_BC_ICMS' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Base de cálculo do ICMS acumulada relativa à alíquota informada',
            'format'   => '15v2'
        ],
        'VL_ICMS' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor do ICMS acumulado relativo à alíquota informada',
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
