<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use stdClass;

class K255 extends Element
{
    const REG = 'K255';
    const LEVEL = 4;
    const PARENT = 'K250';

    protected $parameters = [
        'DT_CONS' => [
            'type'     => 'string',
            'regex'    => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => true,
            'info'     => 'Data do reconhecimento do consumo',
            'format'   => ''
        ],
        'COD_ITEM' => [
            'type'     => 'string',
            'regex'    => '^.{1,60}$',
            'required' => true,
            'info'     => 'Código do item (campo 02 do Registro 0200)',
            'format'   => ''
        ],
        'QTD' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Quantidade de consumo do insumo',
            'format'   => '15v3'
        ],
        'COD_INS_SUBST' => [
            'type'     => 'string',
            'regex'    => '^.{1,60}$',
            'required' => false,
            'info'     => 'Código do insumo que foi substituído',
            'format'   => ''
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
