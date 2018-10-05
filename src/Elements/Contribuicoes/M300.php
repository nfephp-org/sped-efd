<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class M300 extends Element implements ElementInterface
{
    const REG = 'M300';
    const LEVEL = 2;
    const PARENT = 'M001';

    protected $parameters = [
        'COD_CONT' => [
            'type' => 'string',
            'regex' => '^.{0,2}$',
            'required' => false,
            'info' => 'Código da contribuição social diferida em períodos anteriores, conforme a Tabela ' .
                '4.3.5. ',
            'format' => ''
        ],
        'VL_CONT_APUR_DIFER' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor da Contribuição Apurada, diferida em períodos anteriores. ',
            'format' => '15v2'
        ],
        'NAT_CRED_DESC' => [
            'type' => 'string',
            'regex' => '^(1|2|3|4)$',
            'required' => false,
            'info' => 'Natureza do Crédito Diferido, vinculado à receita tributada no mercado interno, a ' .
                'descontar ' .
                ' 01 – Crédito a Alíquota Básica ' .
                ' 02 – Crédito a Alíquota Diferenciada ' .
                ' 03 – Crédito a Alíquota por Unidade de Produto ' .
                ' 04 – Crédito Presumido da Agroindústria. ',
            'format' => ''
        ],
        'VL_CRED_DESC_DIFER' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor do Crédito a Descontar vinculado à contribuição diferida. ',
            'format' => '15v2'
        ],
        'VL_CONT_DIFER_ANT' => [
            'type' => 'numeric',
            'regex' => '^(3)$',
            'required' => false,
            'info' => 'Valor da Contribuição a Recolher, diferida em períodos anteriores (Campo 03 – Campo ' .
                '05) ',
            'format' => '15v2'
        ],
        'PER_APUR' => [
            'type' => 'numeric',
            'regex' => '^(\d{6})$',
            'required' => false,
            'info' => 'Período de apuração da contribuição social e dos créditos diferidos (MMAAAA) ',
            'format' => ''
        ],
        'DT_RECEB' => [
            'type' => 'string',
            'regex' => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => false,
            'info' => 'Data de recebimento da receita, objeto de diferimento ',
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
