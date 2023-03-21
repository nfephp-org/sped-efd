<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class Z1050 extends Element implements ElementInterface
{
    const REG = '1050';
    const LEVEL = 2;
    const PARENT = '1001';

    protected $parameters = [
        'DT_REF' => [
            'type' => 'string',
            'regex' => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => true,
            'info' => 'Data de referência do ajuste (ddmmaaaa)',
            'format' => ''
        ],
        'IND_AJ_BC' => [
            'type' => 'string',
            'regex' => '',
            'required' => true,
            'info' => 'Indicador da natureza do ajuste da base de cálculo, conforme Tabela Externa 4.3.18',
            'format' => ''
        ],
        'CNPJ' => [
            'type' => 'string',
            'regex' => '^[0-9]{14}$',
            'required' => true,
            'info' => 'CNPJ do estabelecimento a que se refere o ajuste',
            'format' => ''
        ],
        'VL_AJ_TOT' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Valor total do ajuste',
            'format' => '15v2'
        ],
        'VL_AJ_CST01' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Parcela do ajuste a apropriar na base de cálculo referente ao CST 01',
            'format' => '15v2'
        ],
        'VL_AJ_CST02' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Parcela do ajuste a apropriar na base de cálculo referente ao CST 02',
            'format' => '15v2'
        ],
        'VL_AJ_CST03' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Parcela do ajuste a apropriar na base de cálculo referente ao CST 03',
            'format' => '15v2'
        ],
        'VL_AJ_CST04' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Parcela do ajuste a apropriar na base de cálculo referente ao CST 04',
            'format' => '15v2'
        ],
        'VL_AJ_CST05' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Parcela do ajuste a apropriar na base de cálculo referente ao CST 05',
            'format' => '15v2'
        ],
        'VL_AJ_CST06' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Parcela do ajuste a apropriar na base de cálculo referente ao CST 06',
            'format' => '15v2'
        ],
        'VL_AJ_CST07' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Parcela do ajuste a apropriar na base de cálculo referente ao CST 07',
            'format' => '15v2'
        ],
        'VL_AJ_CST08' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Parcela do ajuste a apropriar na base de cálculo referente ao CST 08',
            'format' => '15v2'
        ],
        'VL_AJ_CST09' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Parcela do ajuste a apropriar na base de cálculo referente ao CST 09',
            'format' => '15v2'
        ],
        'VL_AJ_CST49' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Parcela do ajuste a apropriar na base de cálculo referente ao CST 49',
            'format' => '15v2'
        ],
        'VL_AJ_CST99' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Parcela do ajuste a apropriar na base de cálculo referente ao CST 99',
            'format' => '15v2'
        ],
        'IND_APROP' => [
            'type' => 'string',
            'regex' => '^(01|02|03)$',
            'required' => true,
            'info' => 'Indicador de apropriação do ajuste: 01 – Referente ao PIS/Pasep e a Cofins '
                . '02 – Referente unicamente ao PIS/Pasep 03 – Referente unicamente à Cofins',
            'format' => ''
        ],
        'NUM_REC' => [
            'type' => 'string',
            'regex' => '^.{1,80}$',
            'required' => false,
            'info' => '',
            'format' => ''
        ],
        'INFO_COMPL' => [
            'type' => 'string',
            'regex' => '',
            'required' => false,
            'info' => '',
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
