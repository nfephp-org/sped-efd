<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class C380 extends Element implements ElementInterface
{
    const REG = 'C380';
    const LEVEL = 3;
    const PARENT = 'C100';

    protected $parameters = [
        'COD_MOD' => [
            'type' => 'string',
            'regex' => '^(02)$',
            'required' => false,
            'info' => 'Código do modelo do documento fiscal, conforme a 
            Tabela 4.1.1 (Código 02 – Nota Fiscal de Venda a Consumidor)',
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
        'NUM_DOC_INI' => [
            'type' => 'numeric',
            'regex' => '^(\d{0,6})$',
            'required' => false,
            'info' => 'Número do documento fiscal inicial',
            'format' => ''
        ],
        'NUM_DOC_FIN' => [
            'type' => 'numeric',
            'regex' => '^(\d{0,6})$',
            'required' => false,
            'info' => 'Número do documento fiscal final',
            'format' => ''
        ],
        'VL_DOC' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor total dos documentos emitidos',
            'format' => '15v2'
        ],
        'VL_DOC_CANC' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor total dos documentos cancelados',
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
