<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use stdClass;

/**
 * REGISTRO C380: INFORMAÇÕES  COMPLEMENTARES  DAS  OPERAÇÕES  DE  SAÍDA  DE  MERCADORIAS SUJEITAS À SUBSTITUIÇÃO
 * TRIBUTÁRIA (CÓDIGO 02)
 * @package NFePHP\EFD\Elements\ICMSIPI
 */
class C380 extends Element
{
    const REG = 'C380';
    const LEVEL = 4;
    const PARENT = 'C370';

    protected $parameters = [
        'COD_MOT_REST_COMPL' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{5}$',
            'required' => true,
            'info'     => 'Código do motivo da restituição ou complementação conforme Tabela 5.7',
            'format'   => ''
        ],
        'QUANT_CONV' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Quantidade do item',
            'format'   => '15v6'
        ],
        'UNID' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{0}$',
            'required' => true,
            'info'     => 'Unidade adotada para informar o campo QUANT_CONV.',
            'format'   => ''
        ],
        'VL_UNIT_ICMS_NA_OPERACAO_CONV' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor unitário para o ICMS na operação, caso não houvesse a ST, considerando unidade '
            .'utilizada para informar o campo QUANT_CONV, aplicando-se a mesma redução da base de cálculo do '
            .'ICMS ST na tributação, se houver',
            'format'   => '15v6'
        ],
        'VL_UNIT_ICMS_OP_CONV' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor unitário correspondente ao ICMS OP utilizado no cálculo do ressarcimento / '
            .'restituição, no desfazimento da substituição tributária, calculado conforme a legislação de cada UF,'
            .' considerando a unidade utilizada para informar o campo QUANT_CONV.',
            'format'   => '15v6'
        ],
        'VL_UNIT_ICMS_OP_ESTOQUE_CONV' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor médio unitário do ICMS que o contribuinte teria se creditado referente à operação '
            .'de entrada das mercadorias em estoque caso estivesse submetida ao regime comum de tributação, calculado'
            .' conforme a legislação de cada UF, considerando a unidade utilizada para informar o campo QUANT_CONV',
            'format'   => '15v6'
        ],
        'VL_UNIT_ICMS_ST_ESTOQUE_CONV' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor médio unitário do ICMS/ST, incluindo FCP ST, das mercadorias em estoque, considerando'
            .' unidade utilizada para informar o campo QUANT_CONV.',
            'format'   => '15v6'
        ],
        'VL_UNIT_FCP_ICMS_ST_ESTOQUE_CONV' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor médio unitário do FCP ST agregado ao ICMS das mercadorias em estoque, considerando'
            .' unidade utilizada para informar o campo QUANT_CONV.',
            'format'   => '15v6'
        ],
        'VL_UNIT_ICMS_ST_CONV_REST' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor unitário do total do ICMS/ST, incluindo FCP ST, a ser restituído/ressarcido,'
            .' calculado conforme a legislação de cada UF, considerando a unidade utilizada para informar o campo '
            .'QUANT_CONV.',
            'format'   => '15v6'
        ],
        'VL_UNIT_FCP_ST_CONV_REST' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor unitário correspondente à parcela de ICMS FCP ST que compõe o campo '
            .'VL_UNIT_ICMS_ST_CONV_REST, considerando a unidade utilizada para informar o campo QUANT_CONV.',
            'format'   => '15v6'
        ],
        'VL_UNIT_ICMS_ST_CONV_COMPL' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor unitário do complemento do ICMS, incluindo FCP ST, considerando a unidade '
            .'utilizada para informar o campo QUANT_CONV.',
            'format'   => '15v6'
        ],
        'VL_UNIT_FCP_ST_CONV_COMPL' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor unitário correspondente à parcela de ICMS FCP ST que compõe o campo '
            .'VL_UNIT_ICMS_ST_CONV_COMPL, considerando unidade utilizada para informar o campo QUANT_CONV.',
            'format'   => '15v6'
        ],
        'CST_ICMS' => [
            'type' => 'numeric',
            'regex' => '^(\d{3})$',
            'required' => true,
            'info' => 'Código da Situação Tributária referente ao ICMS',
            'format' => ''
        ],
        'CFOP' => [
            'type' => 'numeric',
            'regex' => '^(\d{4})$',
            'required' => true,
            'info' => 'Código Fiscal de Operação e Prestação',
            'format' => ''
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
