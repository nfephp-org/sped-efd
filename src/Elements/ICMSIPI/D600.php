<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use stdClass;

class D600 extends Element
{
    const REG = 'D600';
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
        'COD_MUN' => [
            'type'     => 'numeric',
            'regex' => '^[0-9]{7}$',
            'required' => true,
            'info'     => 'Código do município dos terminais faturados, conforme a tabela IBGE',
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
        'COD_CONS' => [
            'type'     => 'string',
            'regex'    => '^0[1|2|3|4|5|6|7|8]$',
            'required' => true,
            'info'     => 'Código de classe de consumo de energia elétrica: '
            .'01 - Comercial '
            .'02 - Consumo Próprio '
            .'03 - Iluminação Pública '
            .'04 - Industrial '
            .'05 - Poder Público '
            .'06 - Residencial '
            .'07 - Rural '
            .'08 -Serviço Público',
            'format'   => ''
        ],
        'QTD_CONS' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info'     => 'Quantidade consumida – saída do estoque',
            'format'   => '15v3'
        ],
        'DT_DOC' => [
            'type'     => 'numeric',
            'regex' => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => true,
            'info'     => 'Data dos documentos consolidados',
            'format'   => ''
        ],
        'VL_DOC' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total acumulado dos documentos fiscais',
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
            'info'     => 'Valor acumulado das prestações de serviços tributados pelo ICMS',
            'format'   => '15v2'
        ],
        'VL_SERV_NT' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor acumulado dos serviços não-tributados pelo ICMS',
            'format'   => '15v2'
        ],
        'VL_TERC' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valores cobrados em nome de terceiros',
            'format'   => '15v2'
        ],
        'VL_DA' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor acumulado das despesas acessórias',
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
        ],
        'VL_PIS' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor do PIS',
            'format'   => '15v2'
        ],
        'VL_COFINS' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor da COFINS',
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
