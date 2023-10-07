<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use stdClass;

class Z1620 extends Element
{
    const REG = '1620';
    const LEVEL = 3;
    const PARENT = '1600';

    protected $parameters = [
        'PER_APU_CRED' => [
            'type' => 'numeric',
            'regex' => '^(\d{0,6})$',
            'required' => false,
            'info' => 'Período de Apuração do Crédito (MM/AAAA) ',
            'format' => ''
        ],
        'ORIG_CRED' => [
            'type' => 'numeric',
            'regex' => '^(1|2)$',
            'required' => false,
            'info' => 'Indicador da origem do crédito ' .
                ' 01 – Crédito decorrente de operações próprias ' .
                ' 02 – Crédito transferido por pessoa jurídica sucedida. ',
            'format' => ''
        ],
        'COD_CRED' => [
            'type' => 'numeric',
            'regex' => '^(\d{3})$',
            'required' => false,
            'info' => 'Código do Tipo do Crédito, conforme Tabela 4.3.6. ',
            'format' => ''
        ],
        'VL_CRED' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor do Crédito a Descontar ',
            'format' => '15v2'
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
