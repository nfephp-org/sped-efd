<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class D610 extends Element implements ElementInterface
{
    const REG = 'D610';
    const LEVEL = 3;
    const PARENT = '';

    protected $parameters = [
        'COD_CLASS' => [
            'type'     => 'numeric',
            'regex' => '^(\d{4})$',
            'required' => true,
            'info'     => 'Código de classificação do item do serviço de comunicação ou de telecomunicação,'
            .' conforme a tabela 4.4.1',
            'format'   => ''
        ],
        'COD_ITEM' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{60}$',
            'required' => true,
            'info'     => 'Código do item (campo 02 do Registro 0200)',
            'format'   => ''
        ],
        'QTD' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Quantidade acumulada do item',
            'format'   => '15v3'
        ],
        'UNID' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{6}$',
            'required' => true,
            'info'     => 'Unidade do item (Campo 02 do registro 0190)',
            'format'   => ''
        ],
        'VL_ITEM' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor acumulado do item',
            'format'   => '15v2'
        ],
        'VL_DESC' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor acumulado dos descontos',
            'format'   => '15v2'
        ],
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
            'info'     => 'Código Fiscal de Operação e Prestação conforme tabela indicada no item 4.2.2',
            'format'   => ''
        ],
        'ALIQ_ICMS' => [
            'type'     => 'numeric',
            'regex'    => '^[0-9]{6}$',
            'required' => true,
            'info'     => 'Alíquota do ICMS',
            'format'   => ''
        ],
        'VL_BC_ICMS' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor acumulado da base de cálculo do ICMS',
            'format'   => '15v2'
        ],
        'VL_ICMS' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor acumulado do ICMS debitado',
            'format'   => '15v2'
        ],
        'VL_BC_ICMS_UF' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor da base de cálculo do ICMS a outras UFs',
            'format'   => '15v2'
        ],
        'VL_ICMS_UF' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor do ICMS a outras UFs',
            'format'   => '15v2'
        ],
        'VL_RED_BC' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor não tributado em função da redução da base de cálculo do ICMS, referente à combinação'
            .' de CST_ICMS, CFOP e alíquota do ICMS.',
            'format'   => '15v2'
        ],
        'VL_PIS' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor acumulado do PIS',
            'format'   => '15v2'
        ],
        'VL_COFINS' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor acumulado da COFINS',
            'format'   => '15v2'
        ],
        'COD_CTA' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{0}$',
            'required' => true,
            'info'     => 'Código da conta analítica contábil debitada/creditada',
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
