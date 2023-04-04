<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use stdClass;

class Z1921 extends Element
{
    const REG = '1921';
    const LEVEL = 5;
    const PARENT = '1920';

    protected $parameters = [
        'COD_AJ_APUR' => [
            'type'     => 'string',
            'regex'    => '^.{8}$',
            'required' => true,
            'info'     => 'Código do ajuste da SUB-APURAÇÃO e dedução, conforme a Tabela indicada no item 5.1.1.',
            'format'   => ''
        ],
        'DESCR_COMPL_AJ' => [
            'type'     => 'string',
            'regex'    => '^.*$',
            'required' => false,
            'info'     => 'Descrição complementar do ajuste da apuração.',
            'format'   => ''
        ],
        'VL_AJ_APUR' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor do ajuste da apuração',
            'format'   => '15v2'
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
