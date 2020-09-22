<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;
use function Safe\substr;

class C170 extends Element implements ElementInterface
{
    const REG = 'C170';
    const LEVEL = 3;
    const PARENT = 'C100';

    protected $parameters = [
        'NUM_ITEM' => [
            'type' => 'numeric',
            'regex' => '^([1-9]{1})(\d{0,2})?$',
            'required' => false,
            'info' => 'Número seqüencial do item no documento fiscal',
            'format' => ''
        ],
        'COD_ITEM' => [
            'type' => 'string',
            'regex' => '^.{0,60}$',
            'required' => false,
            'info' => 'Código do item (campo 02 do Registro 0200)',
            'format' => ''
        ],
        'DESCR_COMPL' => [
            'type' => 'string',
            'regex' => '^(.*)$',
            'required' => false,
            'info' => 'Descrição complementar documento fiscal',
            'format' => ''
        ],
        'QTD' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Quantidade do item',
            'format' => '15v5'
        ],
        'UNID' => [
            'type' => 'string',
            'regex' => '^.{0,6}$',
            'required' => false,
            'info' => 'Unidade do item (Campo 02 do registro 0190)',
            'format' => ''
        ],
        'VL_ITEM' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor total do item (mercadorias ou serviços)',
            'format' => '15v2'
        ],
        'VL_DESC' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor do desconto comercial / exclusão da base de cálculo do PIS/PASEP e da COFINS',
            'format' => '15v2'
        ],
        'IND_MOV' => [
            'type' => 'string',
            'regex' => '^(0|1)$',
            'required' => false,
            'info' => 'Movimentação física do ITEM/PRODUTO: 0. SIM 1. NÃO',
            'format' => ''
        ],
        'CST_ICMS' => [
            'type' => 'numeric',
            'regex' => '^(\d{3})$',
            'required' => false,
            'info' => 'Código da Situação Tributária referente ao ICMS, conforme a Tabela indicada no item 4.3.1',
            'format' => ''
        ],
        'CFOP' => [
            'type' => 'numeric',
            'regex' => '^(\d{4})$',
            'required' => false,
            'info' => 'Código Fiscal de Operação e Prestação',
            'format' => ''
        ],
        'COD_NAT' => [
            'type' => 'string',
            'regex' => '^.{0,10}$',
            'required' => false,
            'info' => 'Código da natureza da operação (campo 02 do Registro 0400)',
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
            'info' => 'Valor da base de cálculo referente à substituição tributária',
            'format' => '15v2'
        ],
        'ALIQ_ST' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Alíquota do ICMS da substituição tributária na unidade da federação de destino',
            'format' => '6v2'
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
            'info' => 'Indicador de período de apuração do IPI: 0 - Mensal;',
            'format' => ''
        ],
        'CST_IPI' => [
            'type' => 'string',
            'regex' => '^[0-9]{2}$',
            'required' => false,
            'info' => 'Código da Situação Tributária referente ao IPI, conforme a Tabela indicada no item 4.3.2.',
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
            'regex' => '^\d+(\.\d*)?|\.\d+$',
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
            'regex' => '^(\d{2})$',
            'required' => false,
            'info' => 'Código da Situação Tributária referente ao PIS.',
            'format' => ''
        ],
        'VL_BC_PIS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor da base de cálculo do PIS/PASEP',
            'format' => '15v2'
        ],
        'ALIQ_PIS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Alíquota do PIS (em percentual)',
            'format' => '8v4'
        ],
        'QUANT_BC_PIS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Quantidade – Base de cálculo PIS/PASEP',
            'format' => '15v3'
        ],
        'ALIQ_PIS_QUANT' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Alíquota do PIS/PASEP (em reais)',
            'format' => '15v4'
        ],
        'VL_PIS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor do PIS/PASEP',
            'format' => '15v2'
        ],
        'CST_COFINS' => [
            'type' => 'numeric',
            'regex' => '^(\d{2})$',
            'required' => false,
            'info' => 'Código da Situação Tributária referente ao COFINS.',
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
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Alíquota do COFINS (em percentual)',
            'format' => '8v4'
        ],
        'QUANT_BC_COFINS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Quantidade – Base de cálculo COFINS',
            'format' => '15v3'
        ],
        'ALIQ_COFINS_QUANT' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
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
            'regex' => '^.{0,255}$',
            'required' => false,
            'info' => 'Código da conta analítica contábil debitada/creditada',
            'format' => ''
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
        $ultimosCaracteres = substr($this->std->cst_icms, -2);
        if (in_array($ultimosCaracteres, ['00', '10', '20', '70']) and $this->values->aliq_icms <= 0) {
            throw new \InvalidArgumentException("[" . self::REG . "] " .
                " nas operações de saídas, se os dois últimos caracteres do CST_ICMS " .
                "forem 00, 10, 20 ou 70, o campo ALIQ_ICMS deve ser maior que “0” (zero). ");
        }

        $multiplicacao = $this->values->vl_bc_cofins * $this->values->aliq_cofins;
        if ($this->values->quant_bc_cofins > 0) {
            $multiplicacao = $this->values->quant_bc_cofins * $this->values->aliq_cofins_quant;
        }

        if (number_format($this->values->vl_cofins, 2) != number_format($multiplicacao, 2)) {
            throw new \InvalidArgumentException("[" . self::REG . "] " .
                "O campo VL_COFINS deve de ser o calculo da multiplicacao " .
                "da base de calculo do cofins com a aliquota do cofins");
        }
    }
}
