<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class Z1510 extends Element implements ElementInterface
{
    const REG = '1510';
    const LEVEL = 3;
    const PARENT = '1500';

    protected $parameters = [
        'NUM_ITEM' => [
            'type'     => 'integer',
            'regex'    => '^\d{1,3}$',
            'required' => true,
            'info'     => 'Número sequencial do item no documento fiscal',
            'format'   => ''
        ],
        'COD_ITEM' => [
            'type'     => 'string',
            'regex'    => '^.{1,60}$',
            'required' => true,
            'info'     => 'Código do item (campo 02 do Registro 0200)',
            'format'   => ''
        ],
        'COD_CLASS' => [
            'type'     => 'integer',
            'regex'    => '^\d{4}$',
            'required' => true,
            'info'     => 'Código de classificação do item de energia elétrica, conforme a Tabela 4.4.1',
            'format'   => ''
        ],
        'QTD' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info'     => 'Quantidade do item',
            'format'   => '15v3'
        ],
        'UNID' => [
            'type'     => 'string',
            'regex'    => '^.{1,6}$',
            'required' => false,
            'info'     => 'Unidade do item (Campo 02 do registro 0190)',
            'format'   => ''
        ],
        'VL_ITEM' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor do item',
            'format'   => '15v2'
        ],
        'VL_DESC' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info'     => 'Valor total do desconto',
            'format'   => '15v2'
        ],
        'CST_ICMS' => [
            'type'     => 'integer',
            'regex'    => '^\d{3}$',
            'required' => true,
            'info'     => 'Código da Situação Tributária, conforme a Tabela indicada no item 4.3.1',
            'format'   => ''
        ],
        'CFOP' => [
            'type'     => 'integer',
            'regex'    => '^\d{4}$',
            'required' => true,
            'info'     => 'Código Fiscal de Operação e Prestação',
            'format'   => ''
        ],
        'VL_BC_ICMS' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info'     => 'Valor da base de cálculo do ICMS',
            'format'   => '15v2'
        ],
        'ALIQ_ICMS' => [
            'type'     => 'integer',
            'regex'    => '^\d{1,6}$',
            'required' => false,
            'info'     => 'Alíquota do ICMS',
            'format'   => ''
        ],
        'VL_ICMS' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info'     => 'Valor do ICMS creditado/debitado',
            'format'   => '15v2'
        ],
        'VL_BC_ICMS_ST' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info'     => 'Valor da base de cálculo referente à substituição tributária',
            'format'   => '15v2'
        ],
        'ALIQ_ST' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info'     => 'Alíquota do ICMS da substituição tributária na unidade da federação de destino',
            'format'   => '15v2'
        ],
        'VL_ICMS_ST' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info'     => 'Valor do ICMS referente à substituição tributária',
            'format'   => '15v2'
        ],
        'IND_REC' => [
            'type'     => 'string',
            'regex'    => '^[0|1]$',
            'required' => true,
            'info'     => 'Indicador do tipo de receita: '
            .'0- Receita própria; '
            .'1- Receita de terceiros',
            'format'   => ''
        ],
        'COD_PART' => [
            'type'     => 'string',
            'regex'    => '^.{1,60}$',
            'required' => false,
            'info'     => 'Código do participante receptor da receita, terceiro da operação "
            ."(campo 02 do Registro 0150)',
            'format'   => ''
        ],
        'VL_PIS' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info'     => 'Valor do PIS',
            'format'   => '15v2'
        ],
        'VL_COFINS' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info'     => 'Valor da COFINS',
            'format'   => '15v2'
        ],
        'COD_CTA' => [
            'type'     => 'string',
            'regex'    => '^.*$',
            'required' => false,
            'info'     => 'Código da conta analítica contábil debitada/creditada',
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
