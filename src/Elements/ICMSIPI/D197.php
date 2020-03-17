<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class D197 extends Element implements ElementInterface
{
    const REG = 'D197';
    const LEVEL = 4;
    const PARENT = '';

    protected $parameters = [
        'COD_AJ' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{10}$',
            'required' => true,
            'info'     => 'Código do ajustes/benefício/incentivo, conforme tabela indicada no item 5.3',
            'format'   => ''
        ],
        'DESCR_COMPL_AJ' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{0}$',
            'required' => true,
            'info'     => 'Descrição complementar do ajuste do documento fiscal',
            'format'   => ''
        ],
        'COD_ITEM' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{60}$',
            'required' => true,
            'info'     => 'Código do item (campo 02 do Registro 0200)',
            'format'   => ''
        ],
        'VL_BC_ICMS' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Base de cálculo do ICMS ou do ICMS ST',
            'format'   => '15v2'
        ],
        'ALIQ_ICMS' => [
            'type'     => 'numeric',
            'regex'    => '^[0-9]{6}$',
            'required' => true,
            'info'     => 'Alíquota do ICMS',
            'format'   => ''
        ],
        'VL_ICMS' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor do ICMS ou do ICMS ST',
            'format'   => '15v2'
        ],
        'VL_OUTROS' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Outros valores',
            'format'   => '15v2'
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
