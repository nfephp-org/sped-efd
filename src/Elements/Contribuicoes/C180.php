<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use stdClass;

class C180 extends Element
{
    const REG = 'C180';
    const LEVEL = 3;
    const PARENT = 'C001';

    protected $parameters = [
        'COD_MOD' => [
            'type' => 'string',
            'regex' => '^(55|65)$',
            'required' => false,
            'info' => 'Texto fixo contendo "55" ou “65”(Código da NF-e ou da NFC-e, conforme a Tabela 4.1.1)',
            'format' => ''
        ],
        'DT_DOC_INI' => [
            'type' => 'string',
            'regex' => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => false,
            'info' => 'Data de Emissão Inicial dos Documentos',
            'format' => ''
        ],
        'DT_DOC_FIN' => [
            'type' => 'string',
            'regex' => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => false,
            'info' => 'Data de Emissão Final dos Documentos',
            'format' => ''
        ],
        'COD_ITEM' => [
            'type' => 'string',
            'regex' => '^.{0,60}$',
            'required' => false,
            'info' => 'Código do Item (campo 02 do Registro 0200)',
            'format' => ''
        ],
        'COD_NCM' => [
            'type' => 'string',
            'regex' => '^.{8}$',
            'required' => false,
            'info' => 'Código da Nomenclatura Comum do Mercosul',
            'format' => ''
        ],
        'EX_IPI' => [
            'type' => 'string',
            'regex' => '^.{0,3}$',
            'required' => false,
            'info' => 'Código EX, conforme a TIPI',
            'format' => ''
        ],
        'VL_TOT_ITEM' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor Total do Item',
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
