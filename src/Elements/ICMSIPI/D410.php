<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class D410 extends Element implements ElementInterface
{
    const REG = 'D410';
    const LEVEL = 3;
    const PARENT = '';

    protected $parameters = [
        'COD_MOD' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{2}$',
            'required' => true,
            'info'     => 'Código do modelo do documento fiscal , conforme a tabela 4.1.1',
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
            'regex'    => '^[0-9]{3}$',
            'required' => true,
            'info'     => 'Subsérie do documento fiscal',
            'format'   => ''
        ],
        'NUM_DOC_INI' => [
            'type'     => 'numeric',
            'regex'    => '^[0-9]{6}$',
            'required' => true,
            'info'     => 'Número do documento fiscal inicial (mesmo modelo, série e subsérie)',
            'format'   => ''
        ],
        'NUM_DOC_FIN' => [
            'type'     => 'numeric',
            'regex' => '^([1-9]{1})(\d{1,5})?$',
            'required' => true,
            'info'     => 'Número do documento fiscal final(mesmo modelo, série e subsérie)',
            'format'   => ''
        ],
        'DT_DOC' => [
            'type'     => 'numeric',
            'regex'    => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => true,
            'info'     => 'Data da emissão dos documentos fiscais',
            'format'   => ''
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
            'info'     => 'Valor total acumulado das operações correspondentes à combinação de CST_ICMS, CFOP e '
            .'alíquota do ICMS, incluídas as despesas acessórias e acréscimos',
            'format'   => '15v2'
        ],
        'VL_DESC' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor acumulado dos descontos',
            'format'   => '15v2'
        ],
        'VL_SERV' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor acumulado da prestação de serviço',
            'format'   => '15v2'
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
            'info'     => 'Valor acumulado do ICMS',
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
