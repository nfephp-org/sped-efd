<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use stdClass;

class I100 extends Element
{
    const REG = 'I100';
    const LEVEL = 3;
    const PARENT = 'I010';

    protected $parameters = [
        'VL_REC' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Valor Total do Faturamento/Receita Bruta no Período',
            'format' => '15v2'
        ],
        'CST_PIS_COFINS' => [
            'type' => 'string',
            'regex' => 'Código de Situação Tributária referente à Receita informada no Campo 02 (Tabelas 4.3.3 e 4.3.4)',
            'required' => true,
            'info' => 'Identificação do processo ou ato concessório',
            'format' => ''
        ],
        'VL_TOT_DED_GER' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Valor Total das Deduções e Exclusões de Caráter Geral',
            'format' => '15v2'
        ],
        'VL_TOT_DED_ESP' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Valor Total das Deduções e Exclusões de Caráter Específico',
            'format' => '15v2'
        ],
        'VL_BC_PIS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Valor da base de cálculo do PIS/PASEP ',
            'format' => '15v2'
        ],
        'ALIQ_PIS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Alíquota do PIS/PASEP (em percentual)',
            'format' => '15v2'
        ],
        'VL_PIS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Valor do PIS/PASEP',
            'format' => '15v2'
        ],
        'VL_BC_COFINS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Valor da base de cálculo da Cofins',
            'format' => '15v2'
        ],
        'ALIQ_COFINS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Alíquota da COFINS (em percentual)',
            'format' => '15v2'
        ],
        'VL_COFINS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Valor da COFINS',
            'format' => '15v2'
        ],
        'INFO_COMPL' => [
            'type' => 'string',
            'regex' => '',
            'required' => false,
            'info' => 'Informação Complementar dos dados informados no registro',
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
