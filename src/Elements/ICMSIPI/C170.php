<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

/**
 * REGISTRO C170: ITENS DO DOCUMENTO (CÓDIGO 01, 1B, 04 e 55).
 * Registro obrigatório para discriminar os itens da nota fiscal (mercadorias e/ou serviços constantes em notas
 * conjugadas), inclusive em operações de entrada de mercadorias acompanhadas
 * de Nota Fiscal Eletrônica (NF-e) de emissão de terceiros.
 * @package NFePHP\EFD\Elements\ICMSIPI
 */
class C170 extends Element implements ElementInterface
{
    const REG = 'C170';
    const LEVEL = 3;
    const PARENT = '';

    protected $parameters = [
        'NUM_ITEM' => [
            'type' => 'numeric',
            'regex' => '^(\d{1,3})$',
            'required' => true,
            'info' => 'Número sequencial do item no documento fiscal',
            'format' => ''
        ],
        'COD_ITEM' => [
            'type' => 'string',
            'regex' => '^.{1,60}$',
            'required' => true,
            'info' => 'Código do item (campo 02 do Registro 0200)',
            'format' => ''
        ],
        'DESCR_COMPL' => [
            'type' => 'string',
            'regex' => '^(.*)$',
            'required' => false,
            'info' => 'Descrição  complementar  do  item  como  adotado no documento fiscal',
            'format' => ''
        ],
        'QTD' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Quantidade do item',
            'format' => '15v5'
        ],
        'UNID' => [
            'type' => 'string',
            'regex' => '^.{1,6}$',
            'required' => true,
            'info' => 'Unidade do item (Campo 02 do registro 0190)',
            'format' => ''
        ],
        'VL_ITEM' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Valor total do item (mercadorias ou serviços)',
            'format' => '15v2'
        ],
        'VL_DESC' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor do desconto comercial',
            'format' => '15v2'
        ],
        'IND_MOV' => [
            'type' => 'string',
            'regex' => '^(0|1)$',
            'required' => true,
            'info' => 'Movimentação física do ITEM/PRODUTO: 0. SIM 1. NÃO',
            'format' => ''
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
        ],
        'COD_NAT' => [
            'type' => 'string',
            'regex' => '^.{0,10}$',
            'required' => false,
            'info' => 'Código  da  natureza  da  operação  (campo  02  do Registro 0400)',
            'format' => ''
        ],
        'VL_BC_ICMS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor da base de cálculo do ICMS',
            'format' => '15v2'
        ],
        'ALIQ_ICMS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Alíquota do ICMS',
            'format' => '6v2'
        ],
        'VL_ICMS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor do ICMS creditado/debitado',
            'format' => '15v2'
        ],
        'VL_BC_ICMS_ST' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor da base de cálculo referente à substituição',
            'format' => '15v2'
        ],
        'ALIQ_ST' => [
            'type' => 'numeric',
            'regex' => '\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Alíquota  do  ICMS  da  substituição  tributária  na unidade da federação de destino',
            'format' => '15v2'
        ],
        'VL_ICMS_ST' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor do ICMS referente à substituição tributária',
            'format' => '15v2'
        ],
        'IND_APUR' => [
            'type' => 'string',
            'regex' => '^(0|1)$',
            'required' => false,
            'info' => 'Indicador de período de apuração do IPI: 0 - Mensal; 1 - Decendial',
            'format' => ''
        ],
        'CST_IPI' => [
            'type' => 'string',
            'regex' => '^(00|01|02|03|04|05|49||50|51|52|53|54|55|99)$',
            'required' => false,
            'info' => 'Código  da  Situação  Tributária  referente  ao  IPI, conforme a Tabela indicada no item 4.3.2.',
            'format' => ''
        ],
        'COD_ENQ' => [
            'type' => 'string',
            'regex' => '^.{3}$',
            'required' => false,
            'info' => 'Código de enquadramento legal do IPI, conforme tabela indicada no item 4.5.3.',
            'format' => ''
        ],
        'VL_BC_IPI' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor da base de cálculo do IPI',
            'format' => '15v2'
        ],
        'ALIQ_IPI' => [
            'type' => 'numeric',
            'regex' => '\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Alíquota do IPI',
            'format' => '6v2'
        ],
        'VL_IPI' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor do IPI creditado/debitado',
            'format' => '15v2'
        ],
        'CST_PIS' => [
            'type' => 'numeric',
            'regex' => '^((0)([1-9]{1})|49|(5)([0-6]{1})|(6)([0-7]{1})|(7)([0-5]{1})|98|99)$',
            'required' => false,
            'info' => 'Código da Situação Tributária referente ao PIS.',
            'format' => ''
        ],
        'VL_BC_PIS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor da base de cálculo do PIS',
            'format' => '15v2'
        ],
        'ALIQ_PIS' => [
            'type' => 'numeric',
            'regex' => '\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Alíquota do PIS (em percentual)',
            'format' => '8v4'
        ],
        'QUANT_BC_PIS' => [
            'type' => 'numeric',
            'regex' => '\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Quantidade – Base de cálculo PIS',
            'format' => '15v2'
        ],
        'ALIQ_PIS_R' => [
            'type' => 'numeric',
            'regex' => '\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Alíquota do PIS (em reais)',
            'format' => '15v4'
        ],
        'VL_PIS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor do PIS',
            'format' => '15v2'
        ],
        'CST_COFINS' => [
            'type' => 'numeric',
            'regex' => '^((0)([1-9]{1})|49|(5)([0-6]{1})|(6)([0-7]{1})|(7)([0-5]{1})|98|99)$',
            'required' => false,
            'info' => 'Código   da COFINS.',
            'format' => ''
        ],
        'VL_BC_COFINS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor da base de cálculo da COFINS',
            'format' => '15v2'
        ],
        'ALIQ_COFINS' => [
            'type' => 'numeric',
            'regex' => '\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Alíquota do COFINS (em percentual)',
            'format' => '8v4'
        ],
        'QUANT_BC_COFINS' => [
            'type' => 'numeric',
            'regex' => '\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Quantidade – Base de cálculo COFINS',
            'format' => '15v3'
        ],
        'ALIQ_COFINS_R' => [
            'type' => 'numeric',
            'regex' => '\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Alíquota da COFINS (em reais)',
            'format' => '15v4'
        ],
        'VL_COFINS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor da COFINS',
            'format' => '15v2'
        ],
        'COD_CTA' => [
            'type' => 'string',
            'regex' => '^(.*)$',
            'required' => false,
            'info' => 'Código       da debitada/creditada',
            'format' => ''
        ],
        'VL_ABAT_NT' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor    do    abatimento    não    tributado    e    não comercial',
            'format' => '15v2'
        ],
    ];

    /**
     * Constructor
     * @param \stdClass $std
     */
    public function __construct(\stdClass $std)
    {
        parent::__construct(self::REG);
        $this->std = $this->standarize($std);
        $this->postValidation();
    }

    public function postValidation()
    {
        if (((float)  str_replace('.', '', str_replace(',', '.', $this->std->qtd))) <= 0) {
            throw new \InvalidArgumentException("[" . self::REG . "] " .
                " O valor do campo  Quantidade do item (QTD) deve ser maior do que zero ");
        }
        return false;
    }
}
