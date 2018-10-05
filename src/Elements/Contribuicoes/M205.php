<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class M205 extends Element implements ElementInterface
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
     * @param \stdClass $std
     */
    public function __construct(\stdClass $std)
    {
        parent::__construct(self::REG);
        $this->std = $this->standarize($std);
    }
}
