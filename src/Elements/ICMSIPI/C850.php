<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class C850 extends Element implements ElementInterface
{
    const REG = 'C850';
    const LEVEL = 3;
    const PARENT = 'C800';

    protected $parameters = [
        'CST_ICMS' => [
            'type' => 'numeric',
            'regex' => '^(\d{1,3})$',
            'required' => true,
            'info' => 'Código da Situação Tributária, conforme a Tabela indicada no item 4.3.1',
            'format' => ''
        ],
        'CFOP' => [
            'type' => 'numeric',
            'regex' => '^(\d{1,4})$',
            'required' => true,
            'info' => 'Código Fiscal de Operação e Prestação do agrupamento de itens',
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
            'info' => '“Valor total do CF-e” na combinação de CST_ICMS, CFOP e alíquota do ICMS, 
            correspondente ao somatório do valor líquido dos itens.',
            'format' => '15v2'
        ],
        'VL_BC_ICMS' => [
            'type' => 'string',
            'regex' => '^.{1,2}$',
            'required' => true,
            'info' => 'N',
            'format' => ''
        ],
        'VL_ICMS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Parcela correspondente ao "Valor do ICMS" referente à 
            combinação de CST_ICMS, CFOP e alíquota do ICMS.',
            'format' => '15v2'
        ],
        'COD_OBS' => [
            'type' => 'string',
            'regex' => '^.{0,6}$',
            'required' => false,
            'info' => 'Código da observação do lançamento fiscal',
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



    /**
     * Transforma o valor com virgula em float para poder fazer os calculos de verificacao
     * @param $vlr
     * @return mixed
     */
    private function strToFloat($vlr)
    {
        return (float)str_replace(',', '.', $this->std->$vlr);
    }


    public function postValidation()
    {
        //transforma os valores em float
        $vlBcIcms = $this->strToFloat('vl_bc_icms');
        $aliqIcms = $this->strToFloat('aliq_icms');
        $vlIcms = $this->strToFloat('vl_icms');

        //pega o fim da string do CST_ICMS e faz a verificacao
        $cstIcmsLast = (int)substr($this->std-> cst_icms, -2);
        if (in_array($cstIcmsLast, [40, 41, 50, 60])) {
            if ($vlBcIcms != 0) {
                throw new \InvalidArgumentException("[" . self::REG . "] " .
                    " O do campo VL_BC_ICMS deve ser Igual 0");
            }
            if ($aliqIcms != 0) {
                throw new \InvalidArgumentException("[" . self::REG . "] " .
                    " O do campo VL_ICMS deve ser Igual 0");
            }
            if ($vlIcms != 0) {
                throw new \InvalidArgumentException("[" . self::REG . "] " .
                    " O do campo ALIQ_ICMS deve ser Igual 0");
            }
        } elseif (!in_array($cstIcmsLast, [51, 90])) {
            if ($vlBcIcms <= 0) {
                throw new \InvalidArgumentException("[" . self::REG . "] " .
                    " O do campo VL_BC_ICMS deve ser maior do que 0");
            }
            if ($aliqIcms <= 0) {
                throw new \InvalidArgumentException("[" . self::REG . "] " .
                    " O do campo ALIQ_ICMS deve ser maior do que 0");
            }
            if ($vlIcms <= 0) {
                throw new \InvalidArgumentException("[" . self::REG . "] " .
                    " O do campo VL_ICMS deve ser maior do que 0");
            }
        }
    }
}
