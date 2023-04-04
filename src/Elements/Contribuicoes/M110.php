<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use stdClass;

class M110 extends Element
{
    const REG = 'M110';
    const LEVEL = 3;
    const PARENT = 'M100';

    protected $parameters = [
        'IND_AJ' => [
            'type' => 'string',
            'regex' => '^(0|1)$',
            'required' => false,
            'info' => 'Indicador do tipo de ajuste ' .
                ' 0- Ajuste de redução ' .
                ' 1- Ajuste de acréscimo. ',
            'format' => ''
        ],
        'VL_AJ' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor do ajuste ',
            'format' => '15v2'
        ],
        'COD_AJ' => [
            'type' => 'string',
            'regex' => '^.{2}$',
            'required' => false,
            'info' => 'Código do ajuste, conforme a Tabela indicada no item 4.3.8. ',
            'format' => ''
        ],
        'NUM_DOC' => [
            'type' => 'string',
            'regex' => '^(.*)$',
            'required' => false,
            'info' => 'Número do processo, documento ou ato concessório ao qual o ajuste está vinculado, se ' .
                'houver. ',
            'format' => ''
        ],
        'DESCR_AJ' => [
            'type' => 'string',
            'regex' => '^(.*)$',
            'required' => false,
            'info' => 'Descrição resumida do ajuste. ',
            'format' => ''
        ],
        'DT_REF' => [
            'type' => 'string',
            'regex' => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => false,
            'info' => 'Data de referência do ajuste (ddmmaaaa) ',
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
