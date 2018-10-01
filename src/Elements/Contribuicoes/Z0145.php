<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class Z0145 extends Element implements ElementInterface
{
    const REG = 'Z0145';
    const LEVEL = 3;
    const PARENT = 'Z0100';

    protected $parameters = [
        'COD_INC_TRIB' => [
            'type' => 'numeric',
            'regex' => '^(1|2)$',
            'required' => false,
            'info' => 'Código indicador da incidência tributária no período: 
            1 – Contribuição Previdenciária apurada no período, exclusivamente com base na Receita Bruta; 
            2 – Contribuição Previdenciária apurada no período, com base na Receita Bruta e com base nas 
            Remunerações pagas, na forma dos nos incisos I e III do art. 22 da Lei no 8.212, de 1991.',
            'format' => ''
        ],
        'VL_REC_TOT' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor da Receita Bruta Total da Pessoa Jurídica no Período',
            'format' => '15v2'
        ],
        'VL_REC_ATIV' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor da Receita Bruta da(s) Atividade(s) Sujeita(s) à
             Contribuição Previdenciária sobre a Receita Bruta',
            'format' => '15v2'
        ],
        'VL_REC_DEMAIS_ATIV' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor da Receita Bruta da(s) Atividade(s) não Sujeita(s) à 
            Contribuição Previdenciária sobre a Receita Bruta',
            'format' => '15v2'
        ],
        'INFO_COMPL' => [
            'type' => 'string',
            'regex' => '^(.*)$',
            'required' => false,
            'info' => 'Informação complementar',
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
