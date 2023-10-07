<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use stdClass;

class M625 extends Element
{
    const REG = 'M625';
    const LEVEL = 5;
    const PARENT = 'N620';

    protected $parameters = [
        'DET_VALOR_AJ' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Detalhamento do valor da contribuição reduzida ou acrescida, informado no Campo 03 ' .
                '(VL_AJ) do registro M620. ',
            'format' => '15v2'
        ],
        'CST_COFINS' => [
            'type' => 'string',
            'regex' => '^((5[0-6])|(6[0-6])|(7[0-5])|98|99)$',
            'required' => false,
            'info' => 'Código de Situação Tributária referente à operação detalhada neste registro. ',
            'format' => ''
        ],
        'DET_BC_CRED' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Detalhamento da base de cálculo geradora de ajuste de contribuição ',
            'format' => '15v3'
        ],
        'DET_ALIQ' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Detalhamento da alíquota a que se refere o ajuste de contribuição ',
            'format' => '8v4'
        ],
        'DT_OPER_AJ' => [
            'type' => 'string',
            'regex' => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => false,
            'info' => 'Data da operação a que se refere o ajuste informado neste registro. ',
            'format' => ''
        ],
        'DESC_AJ' => [
            'type' => 'string',
            'regex' => '^(.*)$',
            'required' => false,
            'info' => 'Descrição da(s) operação(ões) a que se refere o valor informado no Campo 02 ' .
                '(DET_VALOR_AJ) ',
            'format' => ''
        ],
        'COD_CTA' => [
            'type' => 'string',
            'regex' => '^.{0,255}$',
            'required' => false,
            'info' => 'Código da conta contábil debitada/creditada ',
            'format' => ''
        ],
        'INFO_COMPL' => [
            'type' => 'string',
            'regex' => '^(.*)$',
            'required' => false,
            'info' => 'Informação complementar ',
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
}
