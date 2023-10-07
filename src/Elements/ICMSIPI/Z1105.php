<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use stdClass;

class Z1105 extends Element
{
    const REG = '1105';
    const LEVEL = 3;
    const PARENT = '1100';

    protected $parameters = [
        'COD_MOD' => [
            'type'     => 'string',
            'regex'    => '^[0][1]|[5][5]$',
            'required' => true,
            'info'     => 'Código do modelo da NF, conforme tabela 4.1.1',
            'format'   => ''
        ],
        'SERIE' => [
            'type'     => 'string',
            'regex'    => '^.{1,3}$',
            'required' => false,
            'info'     => 'Série da Nota Fiscal',
            'format'   => ''
        ],
        'NUM_DOC' => [
            'type'     => 'integer',
            'regex'    => '^[1-9]\d{0,8}$',
            'required' => true,
            'info'     => 'Número de Nota Fiscal de Exportação emitida pelo Exportador',
            'format'   => ''
        ],
        'CHV_NFE' => [
            'type'     => 'numeric',
            'regex'    => '^([0-9]{44})?$',
            'required' => false,
            'info'     => 'Chave da Nota Fiscal Eletrônica',
            'format'   => ''
        ],
        'DT_DOC' => [
            'type'     => 'integer',
            'regex'    => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => true,
            'info'     => 'Data da emissão da NF de exportação',
            'format'   => ''
        ],
        'COD_ITEM' => [
            'type'     => 'string',
            'regex'    => '^.{1,60}$',
            'required' => true,
            'info'     => 'Código do item (campo 02 do Registro 0200)',
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
