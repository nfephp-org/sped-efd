<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class D300 extends Element implements ElementInterface
{
    const REG = 'D300';
    const LEVEL = 2;
    const PARENT = '';

    protected $parameters = [
        'COD_MOD' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{2}$',
            'required' => true,
            'info'     => 'Código do modelo do documento fiscal, conforme a tabela 4.1.1',
            'format'   => ''
        ],
        'SER' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{4}$',
            'required' => true,
            'info'     => 'Série do documento fiscal',
            'format'   => ''
        ],
        'SUB' => [
            'type'     => 'numeric',
            'regex'    => '^[0-9]{4}$',
            'required' => true,
            'info'     => 'Subsérie do documento fiscal',
            'format'   => ''
        ],
        'NUM_DOC_INI' => [
            'type'     => 'numeric',
            'regex'    => '^[0-9]{6}$',
            'required' => true,
            'info'     => 'Número do primeiro documento fiscal emitido (mesmo modelo, série e subsérie)',
            'format'   => ''
        ],
        'NUM_DOC_FIN' => [
            'type'     => 'numeric',
            'regex'    => '',
            'required' => true,
            'info'     => 'Número do último documento fiscal emitido (mesmo modelo, série e subsérie)',
            'format'   => ''
        ],
        'CST_ICMS' => [
            'type'     => 'numeric',
            'regex'    => '',
            'required' => true,
            'info'     => 'Código da Situação Tributária, conforme a tabela indicada no item 4.3.1',
            'format'   => ''
        ],
        'CFOP' => [
            'type'     => 'numeric',
            'regex'    => '',
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
        'DT_DOC' => [
            'type'     => 'numeric',
            'regex'    => '',
            'required' => true,
            'info'     => 'Data da emissão dos documentos fiscais',
            'format'   => ''
        ],
        'VL_OPR' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total acumulado das operações correspondentes à combinação de CST_ICMS, CFOP e '
            .'alíquota do ICMS, incluídas as despesas acessórias e acréscimos',
            'format'   => '15v2'
        ],
        'VL_DESC' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total dos descontos',
            'format'   => '15v2'
        ],
        'VL_SERV' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total da prestação de serviço',
            'format'   => '15v2'
        ],
        'VL_SEG' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor de seguro',
            'format'   => '15v2'
        ],
        'VL_OUTDESP' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor de outras despesas',
            'format'   => '15v2'
        ],
        'VL_BC_ICMS' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total da base de cálculo do ICMS',
            'format'   => '15v2'
        ],
        'VL_ICMS' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total do ICMS',
            'format'   => '15v2'
        ],
        'VL_RED_BC' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor não tributado em função da redução da base de cálculo do ICMS, referente à '
            .'combinação de CST_ICMS, CFOP e alíquota do ICMS',
            'format'   => '15v2'
        ],
        'COD_OBS' => [
            'type'     => 'string',
            'regex'    => '^.{1,6}$',
            'required' => true,
            'info'     => 'Código da observação do lançamento fiscal (campo 02 do Registro 0460)',
            'format'   => ''
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
