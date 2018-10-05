<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class M500 extends Element implements ElementInterface
{
    const REG = 'M500';
    const LEVEL = 2;
    const PARENT = 'M001';

    protected $parameters = [
        'COD_CRED' => [
            'type' => 'string',
            'regex' => '^.{3}$',
            'required' => false,
            'info' => 'Código de Tipo de Crédito apurado no período, conforme a Tabela 4.3.6. ',
            'format' => ''
        ],
        'IND_CRED_ORI' => [
            'type' => 'numeric',
            'regex' => '^(0|1)$',
            'required' => false,
            'info' => 'Indicador de Crédito Oriundo de ' .
                ' 0 – Operações próprias 1 – Evento de incorporação, cisão ou fusão ',
            'format' => ''
        ],
        'VL_BC_COFINS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor da Base de Cálculo do Crédito ',
            'format' => '15v2'
        ],
        'ALIQ_COFINS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Alíquota da COFINS (em percentual) ',
            'format' => '8v4'
        ],
        'QUANT_BC_COFINS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Quantidade – Base de cálculo COFINS ',
            'format' => '15v3'
        ],
        'ALIQ_COFINS_QUANT' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Alíquota da COFINS (em reais) ',
            'format' => '15v4'
        ],
        'VL_CRED' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor total do crédito apurado no período ',
            'format' => '15v2'
        ],
        'VL_AJUS_ACRES' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor total dos ajustes de acréscimo ',
            'format' => '15v2'
        ],
        'VL_AJUS_REDUC' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor total dos ajustes de redução ',
            'format' => '15v2'
        ],
        'VL_CRED_DIFER' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor total do crédito diferido no período ',
            'format' => '15v2'
        ],
        'VL_CRED_DISP' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor Total do Crédito Disponível relativo ao Período (08 + 09 – 10 – 11) ',
            'format' => '15v2'
        ],
        'IND_DESC_CRED' => [
            'type' => 'string',
            'regex' => '^(0|1)$',
            'required' => false,
            'info' => 'Indicador de utilização do crédito disponível no período ' .
                ' 0 – Utilização do valor total para desconto da contribuição apurada no período, no ' .
                'Registro M600 ' .
                ' 1 – Utilização de valor parcial para desconto da contribuição apurada no período, ' .
                'no Registro M600. ',
            'format' => ''
        ],
        'VL_CRED_DESC' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor do Crédito disponível, descontado da contribuição apurada no próprio período. ' .
                'Se IND_DESC_CRED=0, informar o valor total do Campo 12 ' .
                ' Se IND_DESC_CRED=1, informar o valor parcial do Campo 12. ',
            'format' => '15v2'
        ],
        'SLD_CRED' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Saldo de créditos a utilizar em períodos futuros (12 – 14) ',
            'format' => '15v2'
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
