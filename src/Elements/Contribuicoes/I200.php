<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use stdClass;

class I200 extends Element
{
    const REG = 'I200';
    const LEVEL = 3;
    const PARENT = 'I010';

    protected $parameters = [
        'NUM_CAMPO' => [
            'type' => 'string',
            'regex' => '',
            'required' => true,
            'info' => 'Informar o número do campo do registro “I100” (Campos 02, 04 ou 05), objeto de informação '
                . 'neste registro.',
            'format' => ''
        ],
        'COD_DET' => [
            'type' => 'string',
            'regex' => '',
            'required' => true,
            'info' => 'Código do tipo de detalhamento, conforme Tabelas 7.1.1 e/ou 7.1.2',
            'format' => ''
        ],
        'DET_VALOR' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Valor detalhado referente ao campo 03 (COD_DET) deste registro',
            'format' => '15v2'
        ],
        'COD_CTA' => [
            'type' => 'string',
            'regex' => '',
            'required' => true,
            'info' => 'Código da conta contábil referente ao valor informado no campo 04 (DET_VALOR)',
            'format' => ''
        ],
        'INFO_COMPL' => [
            'type' => 'string',
            'regex' => '',
            'required' => false,
            'info' => 'Informação Complementar dos dados informados no registro',
            'format' => ''
        ]
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
