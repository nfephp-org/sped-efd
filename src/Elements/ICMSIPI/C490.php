<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use stdClass;

class C490 extends Element
{
    const REG = 'C490';
    const LEVEL = 4;
    const PARENT = 'C400';

    protected $parameters = [
        'CST_ICMS' => [
            'type' => 'numeric',
            'regex' => '^(\d{3})$',
            'required' => true,
            'info' => 'Código da Situação Tributária,',
            'format' => ''
        ],
        'CFOP' => [
            'type' => 'numeric',
            'regex' => '^(\d{4})$',
            'required' => true,
            'info' => 'Código Fiscal de Operação e Prestação',
            'format' => ''
        ],
        'ALIQ_ICMS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Alíquota do ICMS',
            'format' => '6v2'
        ],
        'VL_OPR' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Valor da operação correspondente à combinação de CST_ICMS, CFOP, e alíquota do ICMS,
            incluídas as despesas acessórias e acréscimos',
            'format' => '15v2'
        ],
        'VL_BC_ICMS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Valor acumulado da base de cálculo do ICMS, referente à combinação
            de CST_ICMS, CFOP, e alíquota do ICMS.',
            'format' => '15v2'
        ],
        'VL_ICMS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Valor acumulado do ICMS, referente à combinação de CST_ICMS, CFOP e alíquota do ICMS.',
            'format' => '15v2'
        ],
        'COD_OBS' => [
            'type' => 'string',
            'regex' => '^.{0,6}$',
            'required' => false,
            'info' => 'Código da observação do lançamento fiscal (campo 02 do Registro 0460)',
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
