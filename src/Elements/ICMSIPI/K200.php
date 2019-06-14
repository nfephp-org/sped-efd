<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class K200 extends Element implements ElementInterface
{
    const REG = 'K200';
    const LEVEL = 3;
    const PARENT = 'K100';

    protected $parameters = [
        'DT_EST' => [
            'type'     => 'string',
            'regex'    => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => true,
            'info'     => 'Data do estoque final',
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
            'info'     => 'Quantidade em estoque',
            'format'   => '15v3'
        ],
        'IND_EST' => [
            'type'     => 'integer',
            'regex'    => '^[0-2]{1}$',
            'required' => true,
            'info'     => 'Indicador do tipo de estoque:'
            . '0 - Estoque de propriedade do informante e em seu poder;'
            . '1 - Estoque de propriedade do informante e em posse de terceiros;'
            . '2 - Estoque de propriedade de terceiros e em posse do informante',
            'format'   => ''
        ],
        'COD_PART' => [
            'type'     => 'string',
            'regex'    => '^.{1,60}$',
            'required' => false,
            'info'     => 'Código do participante (campo 02 do Registro 0150):'
            . 'proprietário/possuidor que não seja o informante do arquivo',
            'format'   => ''
        ]
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
