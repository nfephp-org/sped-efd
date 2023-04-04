<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use stdClass;

class M205 extends Element
{
    const REG = 'M205';
    const LEVEL = 3;
    const PARENT = 'M200';

    protected $parameters = [
        'NUM_CAMPO' => [
            'type' => 'string',
            'regex' => '^.{2}$',
            'required' => false,
            'info' => 'Informar o número do campo do registro “M200” ',
            'format' => ''
        ],
        'COD_REC' => [
            'type' => 'string',
            'regex' => '^.{6}$',
            'required' => false,
            'info' => 'Informar o código da receita referente à contribuição a recolher, detalhada neste ' .
                'registro. ',
            'format' => ''
        ],
        'VL_DEBITO' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor do Débito correspondente ao código do Campo 03, conforme informação na DCTF. ',
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
