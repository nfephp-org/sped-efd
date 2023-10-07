<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use stdClass;

class Z0035 extends Element
{
    const REG = '0035';
    const LEVEL = 0;
    const PARENT = '2';

    protected $parameters = [
        'COD_SCP' => [
            'type' => 'numeric',
            'regex' => '^(\d{14})$',
            'required' => false,
            'info' => 'Identificação da SCP',
            'format' => ''
        ],
        'DESC_SCP' => [
            'type' => 'string',
            'regex' => '^(.*)$',
            'required' => false,
            'info' => 'Descrição da SCP',
            'format' => ''
        ],
        'INF_COMP' => [
            'type' => 'string',
            'regex' => '^(.*)$',
            'required' => false,
            'info' => 'Informação Complementar',
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
