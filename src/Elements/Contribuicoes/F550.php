<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class F550 extends Element implements ElementInterface
{
    const REG = 'F550';
    const LEVEL = 0;
    const PARENT = '1';

    protected $parameters = [
        'VL_REC_COMP' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor total da receita auferida, referente à '
                . 'combinação de CST e Alíquota.',
            'format' => '15v2'
        ],
        'CST_PIS' => [
            'type' => 'numeric',
            'regex' => '^(01|02|04|05|06|07|08|09|49|99)$',
            'required' => false,
            'info' => 'Código da Situação Tributária referente ao PIS/PASEP',
            'format' => ''
        ],
        'VL_DESC_PIS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor do desconto / exclusão da base de cálculo.',
            'format' => '15v2'
        ],
        'VL_BC_PIS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor da base de cálculo do PIS/PASEP',
            'format' => '15v2'
        ],
        'ALIQ_PIS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Alíquota do PIS/PASEP (em percentual).',
            'format' => '8v4'
        ],
        'VL_PIS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor do PIS/PASEP',
            'format' => '15v2'
        ],
        'CST_COFINS' => [
            'type' => 'numeric',
            'regex' => '^(01|02|04|05|06|07|08|09|49|99)$',
            'required' => false,
            'info' => 'Código da Situação Tributária referente a COFINS.',
            'format' => ''
        ],
        'VL_DESC_COFINS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor do desconto / exclusão da base de cálculo.',
            'format' => '15v2'
        ],
        'VL_BC_COFINS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor da base de cálculo da COFINS.',
            'format' => '15v2'
        ],
        'ALIQ_COFINS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Alíquota da COFINS (em percentual).',
            'format' => '8v4'
        ],
        'VL_COFINS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor da COFINS.',
            'format' => '15v2'
        ],
        'COD_MOD' => [
            'type' => 'string',
            'regex' => '^.{2}$',
            'required' => false,
            'info' => 'Código do modelo do documento fiscal.',
            'format' => ''
        ],
        'CFOP' => [
            'type' => 'string',
            'regex' => '^.{4}$',
            'required' => false,
            'info' => 'Código fiscal de operação e prestação.',
            'format' => ''
        ],
        'COD_CTA' => [
            'type' => 'string',
            'regex' => '^.{255}$',
            'required' => false,
            'info' => 'Código da conta analítica contábil debitada / creditada.',
            'format' => ''
        ],
        'INFO_COMPL' => [
            'type' => 'string',
            'regex' => '',
            'required' => false,
            'info' => 'Informação complementar.',
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
