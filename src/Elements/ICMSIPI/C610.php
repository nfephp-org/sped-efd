<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use stdClass;

class C610 extends Element
{
    const REG = 'C610';
    const LEVEL = 3;
    const PARENT = 'C600';

    protected $parameters = [
        'COD_CLASS' => [
            'type' => 'numeric',
            'regex' => '^(\d{4})$',
            'required' => false,
            'info' => 'Código de classificação do item de energia elétrica',
            'format' => ''
        ],
        'COD_ITEM' => [
            'type' => 'string',
            'regex' => '^.{1,60}$',
            'required' => true,
            'info' => 'Código do item (campo 02 do Registro 0200)',
            'format' => ''
        ],
        'QTD' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Quantidade acumulada do item',
            'format' => '15v3'
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
            'info' => 'Valor acumulado do item',
            'format' => '15v2'
        ],
        'VL_DESC' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor acumulado dos descontos',
            'format' => '15v2'
        ],
        'CST_ICMS' => [
            'type' => 'numeric',
            'regex' => '^(\d{3})$',
            'required' => true,
            'info' => 'Código da Situação Tributária, conforme a Tabela indicada no item 4.3.1',
            'format' => ''
        ],
        'CFOP' => [
            'type' => 'numeric',
            'regex' => '^(\d{4})$',
            'required' => true,
            'info' => 'Código Fiscal de Operação e Prestação conforme tabela indicada no item 4.2.2.',
            'format' => ''
        ],
        'ALIQ_ICMS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Alíquota do ICMS',
            'format' => '6v2'
        ],
        'VL_BC_ICMS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor acumulado da base de cálculo do ICMS',
            'format' => '15v2'
        ],
        'VL_ICMS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor acumulado do ICMS debitado',
            'format' => '15v2'
        ],
        'VL_BC_ICMS_ST' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor da base de cálculo do ICMS substituição tributária',
            'format' => '15v2'
        ],
        'VL_ICMS_ST' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor do ICMS retido por substituição tributária',
            'format' => '15v2'
        ],
        'VL_PIS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor do PIS',
            'format' => '15v2'
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
            'info' => 'Código da conta analítica contábil debitada/creditada',
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
        if ($this->values->qtd <= 0) {
            $this->errors[] = "[" . self::REG . "] "
                . " O do campo QTD deve ser maior do que 0";
        }
        //pega o fim da string do CST_ICMS e faz a verificacao
        $cstIcmsLast = (int) substr($this->std->cst_icms, -2);
        if (in_array($cstIcmsLast, [30, 40, 41, 50, 60])) {
            if ($this->values->vl_bc_icms != 0) {
                $this->errors[] = "[" . self::REG . "] "
                    . " O do campo VL_BC_ICMS deve ser Igual 0";
            }
            if ($this->values->aliq_icms != 0) {
                $this->errors[] = "[" . self::REG . "] "
                    . " O do campo VL_ICMS deve ser Igual 0";
            }
            if ($this->values->vl_icms != 0) {
                $this->errors[] = "[" . self::REG . "] "
                    . " O do campo ALIQ_ICMS deve ser Igual 0";
            }
        } elseif (!in_array($cstIcmsLast, [51, 90])) {
            if ($this->values->vl_bc_icms <= 0) {
                $this->errors[] = "[" . self::REG . "] "
                    . " O do campo VL_BC_ICMS deve ser maior do que 0";
            }
            if ($this->values->aliq_icms <= 0) {
                $this->errors[] = "[" . self::REG . "] "
                    . " O do campo ALIQ_ICMS deve ser maior do que 0";
            }
            if ($this->values->vl_icms <= 0) {
                $this->errors[] = "[" . self::REG . "] "
                    . " O do campo VL_ICMS deve ser maior do que 0";
            }
        }
    }
}
