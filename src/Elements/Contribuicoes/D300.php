<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use stdClass;

class D300 extends Element
{
    const REG = 'D300';
    const LEVEL = 3;
    const PARENT = 'D001';

    protected $parameters = [
        'COD_MOD' => [
            'type' => 'string',
            'regex' => '^(13|14|15|16|18)$',
            'required' => false,
            'info' => 'Código do modelo do documento fiscal, conforme a Tabela 4.1.1. ',
            'format' => ''
        ],
        'SER' => [
            'type' => 'string',
            'regex' => '^.{0,4}$',
            'required' => false,
            'info' => 'Série do documento fiscal ',
            'format' => ''
        ],
        'SUB' => [
            'type' => 'numeric',
            'regex' => '^(\d{0,3})$',
            'required' => false,
            'info' => 'Subsérie do documento fiscal ',
            'format' => ''
        ],
        'NUM_DOC_INI' => [
            'type' => 'numeric',
            'regex' => '^(\d{0,6})$',
            'required' => false,
            'info' => 'Número do primeiro documento fiscal emitido no período (mesmo modelo, série e ' .
                'subsérie) ',
            'format' => ''
        ],
        'NUM_DOC_FIN' => [
            'type' => 'numeric',
            'regex' => '^(\d{0,6})$',
            'required' => false,
            'info' => 'Número do último documento fiscal emitido no período (mesmo modelo, série e subsérie) ',
            'format' => ''
        ],
        'CFOP' => [
            'type' => 'numeric',
            'regex' => '^(\d{4})$',
            'required' => false,
            'info' => 'Código Fiscal de Operação e Prestação conforme tabela indicada no item 4.2.2 ',
            'format' => ''
        ],
        'DT_REF' => [
            'type' => 'string',
            'regex' => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => false,
            'info' => 'Data do dia de referência do resumo diário ',
            'format' => ''
        ],
        'VL_DOC' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor total dos documentos fiscais emitidos ',
            'format' => '15v2'
        ],
        'VL_DESC' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor total dos descontos ',
            'format' => '15v2'
        ],
        'CST_PIS' => [
            'type' => 'string',
            'regex' => '^((0[1-9])|49|99)$',
            'required' => false,
            'info' => 'Código da Situação Tributária referente ao PIS/PASEP ',
            'format' => ''
        ],
        'VL_BC_PIS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor da base de cálculo do PIS/PASEP ',
            'format' => '15v2'
        ],
        'ALIQ_PIS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Alíquota do PIS/PASEP (em percentual) ',
            'format' => '8v4'
        ],
        'VL_PIS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor do PIS/PASEP ',
            'format' => '15v2'
        ],
        'CST_COFINS' => [
            'type' => 'string',
            'regex' => '^((5[0-6])|(6[0-6])|(7[0-5])|98|99)$',
            'required' => false,
            'info' => 'Código da Situação Tributária referente a COFINS ',
            'format' => ''
        ],
        'VL_BC_COFINS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor da base de cálculo da COFINS ',
            'format' => '15v2'
        ],
        'ALIQ_COFINS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Alíquota da COFINS (em percentual) ',
            'format' => '8v4'
        ],
        'VL_COFINS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor da COFINS ',
            'format' => '15v2'
        ],
        'COD_CTA' => [
            'type' => 'string',
            'regex' => '^.{0,255}$',
            'required' => false,
            'info' => 'Código da conta analítica contábil debitada/creditada ',
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

    public function postValidation()
    {
        $multiplicacao = $this->values->vl_bc_pis * $this->values->aliq_pis;
        if (number_format($this->values->vl_pis, 2) != number_format($multiplicacao / 100, 2)) {
            $this->errors[] = "[" . self::REG . "] " .
                "O campo VL_PIS deve de ser o calculo da multiplicacao " .
                "da base de calculo do PIS com a aliquota do PIS, o resultado dividido por 100";
        }

        $multiplicacao = $this->values->vl_bc_cofins * $this->values->aliq_cofins;
        if (number_format($this->values->vl_cofins, 2) != number_format($multiplicacao / 100, 2)) {
            $this->errors[] = "[" . self::REG . "] " .
                "O campo VL_COFINS deve de ser o calculo da multiplicacao " .
                "da base de calculo do cofins com a aliquota do cofins, o resultado dividido por 100";
        }
    }
}
