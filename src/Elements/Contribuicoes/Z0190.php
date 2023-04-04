<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use stdClass;

class Z0190 extends Element
{
    const REG = '0190';
    const LEVEL = 3;
    const PARENT = '1000';

    protected $parameters = [
        'UNID' => [
            'type' => 'string',
            'regex' => '^.{0,6}$',
            'required' => false,
            'info' => 'Código da unidade de medida',
            'format' => ''
        ],
        'DESCR' => [
            'type' => 'string',
            'regex' => '^(.*)$',
            'required' => false,
            'info' => 'Descrição da unidade de medida',
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

    public function postValidation()
    {
        if ($this->std->unid == $this->std->descr) {
            $this->errors[] = "[" . self::REG . "] " .
                " Os campos UNID e DESCR ";
        }
    }
}
