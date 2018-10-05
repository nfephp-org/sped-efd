<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class Z1800 extends Element implements ElementInterface
{
    const REG = '1800';
    const LEVEL = 2;
    const PARENT = '1001';

    protected $parameters = [
        'INC_IMOB' => [
            'type' => 'string',
            'regex' => '^.{0,90}$',
            'required' => false,
            'info' => 'Empreendimento objeto de Incorporação Imobiliária, optante pelo RET. ',
            'format' => ''
        ],
        'REC_RECEB_RET' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Receitas recebidas pela incorporadora na venda das unidades imobiliárias que compõem a ' .
                'incorporação. ',
            'format' => '15v2'
        ],
        'REC_FIN_RET' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Receitas Financeiras e Variações Monetárias decorrentes das vendas submetidas ao RET. ',
            'format' => '15v2'
        ],
        'BC_RET' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Base de Cálculo do Recolhimento Unificado ',
            'format' => '15v2'
        ],
        'ALIQ_RET' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Alíquota do Recolhimento Unificado. ',
            'format' => '6v2'
        ],
        'VL_REC_UNI' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor do Recolhimento Unificado. ',
            'format' => '15v2'
        ],
        'DT_REC_UNI' => [
            'type' => 'string',
            'regex' => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => false,
            'info' => 'Data do recolhimento unificado ',
            'format' => ''
        ],
        'COD_REC' => [
            'type' => 'string',
            'regex' => '^.{0,4}$',
            'required' => false,
            'info' => 'Código da Receita ',
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
    }
}
