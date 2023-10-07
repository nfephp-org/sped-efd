<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use stdClass;

class Z1200 extends Element
{
    const REG = '1200';
    const LEVEL = 2;
    const PARENT = '1001';

    protected $parameters = [
        'PER_APUR_ANT' => [
            'type' => 'numeric',
            'regex' => '^(\d{6})$',
            'required' => false,
            'info' => 'Período de Apuração da Contribuição Social Extemporânea (MMAAAA). ',
            'format' => ''
        ],
        'NAT_CONT_REC' => [
            'type' => 'string',
            'regex' => '^.{0,2}$',
            'required' => false,
            'info' => 'Natureza da Contribuição a Recolher, conforme Tabela 4.3.5. ',
            'format' => ''
        ],
        'VL_CONT_APUR' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor da Contribuição Apurada. ',
            'format' => '15v2'
        ],
        'VL_CRED_PIS_DESC' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor do Crédito de PIS/PASEP a Descontar, da Contribuição Social Extemporânea. ',
            'format' => '15v2'
        ],
        'VL_CONT_DEV' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor da Contribuição Social Extemporânea Devida. ',
            'format' => '15v2'
        ],
        'VL_OUT_DED' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor de Outras Deduções. ',
            'format' => '15v2'
        ],
        'VL_CONT_EXT' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor da Contribuição Social Extemporânea a pagar. ',
            'format' => '15v2'
        ],
        'VL_MUL' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor da Multa. ',
            'format' => '15v2'
        ],
        'VL_JUR' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor dos Juros. ',
            'format' => '15v2'
        ],
        'DT_RECOL' => [
            'type' => 'string',
            'regex' => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => false,
            'info' => 'Data do Recolhimento. ',
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
