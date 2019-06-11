<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class K235 extends Element implements ElementInterface
{
    const REG = 'K235';
    const LEVEL = 4;
    const PARENT = 'K230';

    protected $parameters = [
        'DT_SAIDA' => [
            'type'     => 'numeric',
            'regex'    => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => true,
            'info'     => 'Data de saída do estoque para alocação ao produto',
            'format'   => ''
        ],
        'COD_ITEM' => [
            'type'     => 'string',
            'regex'    => '^.{1,60}$',
            'required' => true,
            'info'     => 'Código do item componente/insumo (campo 02 do Registro 0200)',
            'format'   => ''
        ],
        'QTD' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Quantidade consumida do item',
            'format'   => '15v6'
        ],
        'COD_INS_SUBST' => [
            'type'     => 'string',
            'regex'    => '^.{1,60}$',
            'required' => false,
            'info'     => 'Código do insumo que foi substituído, caso ocorra a substituição (campo 02 do Registro 0210)',
            'format'   => ''
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
