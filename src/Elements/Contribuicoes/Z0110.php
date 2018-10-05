<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class Z0110 extends Element implements ElementInterface
{
    const REG = '0110';
    const LEVEL = 2;
    const PARENT = '000';

    protected $parameters = [
        'COD_INC_TRIB' => [
            'type' => 'numeric',
            'regex' => '^([1-3]{1})$',
            'required' => false,
            'info' => 'Código indicador da incidência tributária no período: 
            1 – Escrituração de operações com incidência exclusivamente no regime não-cumulativo; 
            2 – Escrituração de operações com incidência exclusivamente no regime cumulativo; 
            3 – Escrituração de operações com incidência nos regimes não-cumulativo e cumulativo.',
            'format' => ''
        ],
        'IND_APRO_CRED' => [
            'type' => 'numeric',
            'regex' => '^([1-2]{1})$',
            'required' => false,
            'info' => 'Código indicador de método de apropriação de créditos comuns, 
            no caso de incidência no regime não-cumulativo (COD_INC_TRIB = 1 ou 3): 
            1 – Método de Apropriação Direta; 2 – Método de Rateio Proporcional (Receita Bruta)',
            'format' => ''
        ],
        'COD_TIPO_CONT' => [
            'type' => 'numeric',
            'regex' => '^([1-2]{1})$',
            'required' => false,
            'info' => 'Código indicador do Tipo de Contribuição Apurada no Período 
            1 – Apuração da Contribuição Exclusivamente a Alíquota Básica 
            2 – Apuração da Contribuição a Alíquotas Específicas (Diferenciadas e/ou por 
            Unidade de Medida de Produto)',
            'format' => ''
        ],
        'IND_REG_CUM' => [
            'type' => 'numeric',
            'regex' => '^(1|2|9)$',
            'required' => false,
            'info' => 'Código indicador do critério de escrituração e apuração adotado, 
            no caso de incidência exclusivamente no regime cumulativo (COD_INC_TRIB = 2), 
            pela pessoa jurídica submetida ao regime de tributação com base no lucro presumido: 
            1 – Regime de Caixa – Escrituração consolidada (Registro F500); 
            2 – Regime de Competência - Escrituração consolidada (Registro F550); 
            9 – Regime de Competência - Escrituração detalhada, com base 
            nos registros dos Blocos “A”, “C”, “D” e “F”.',
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
