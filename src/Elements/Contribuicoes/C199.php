<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use stdClass;

class C199 extends Element
{
    const REG = 'C199';
    const LEVEL = 4;
    const PARENT = 'C190';

    protected $parameters = [
        'COD_DOC_IMP' => [
            'type' => 'string',
            'regex' => '^(0|1)$',
            'required' => false,
            'info' => 'Documento de importação:
             0 – Declaração de Importação; 1 – Declaração Simplificada de Importação.',
            'format' => ''
        ],
        'NUM_DOCIMP' => [
            'type' => 'string',
            'regex' => '^.{0,10}$',
            'required' => false,
            'info' => 'Número do documento de Importação.',
            'format' => ''
        ],
        'VL_PIS_IMP' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor pago de PIS na importação',
            'format' => '15v2'
        ],
        'VL_COFINS_IMP' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor pago de COFINS na importação',
            'format' => '15v2'
        ],
        'NUM_ACDRAW' => [
            'type' => 'string',
            'regex' => '^.{0,20}$',
            'required' => false,
            'info' => 'Número do Ato Concessório do regime Drawback',
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
