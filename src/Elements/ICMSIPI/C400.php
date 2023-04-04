<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use stdClass;

class C400 extends Element
{
    const REG = 'C400';
    const LEVEL = 2;
    const PARENT = 'C001';

    protected $parameters = [
        'COD_MOD' => [
            'type' => 'string',
            'regex' => '^(02|2D|60)$',
            'required' => false,
            'info' => 'Código do modelo do documento fiscal',
            'format' => ''
        ],
        'ECF_MOD' => [
            'type' => 'string',
            'regex' => '^.{0,20}$',
            'required' => false,
            'info' => 'Modelo do equipamento',
            'format' => ''
        ],
        'ECF_FAB' => [
            'type' => 'string',
            'regex' => '^.{0,21}$',
            'required' => false,
            'info' => 'Número de série de fabricação do ECF',
            'format' => ''
        ],
        'ECF_CX' => [
            'type' => 'numeric',
            'regex' => '^(\d{0,3})$',
            'required' => false,
            'info' => 'Número do caixa atribuído ao ECF',
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
