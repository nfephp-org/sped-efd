<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use stdClass;

class Z1925 extends Element
{
    const REG = '1925';
    const LEVEL = 5;
    const PARENT = '1920';

    protected $parameters = [
        'COD_INF_ADIC' => [
            'type'     => 'string',
            'regex'    => '^.{8}$',
            'required' => true,
            'info'     => 'Código da informação adicional conforme tabela a ser '
            .'definida pelas SEFAZ, conforme tabela definida no item 5.2.',
            'format'   => ''
        ],
        'VL_INF_ADIC' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor referente à informação adicional',
            'format'   => '15v2'
        ],
        'DESCR_COMPL_AJ' => [
            'type'     => 'string',
            'regex'    => '^.*$',
            'required' => false,
            'info'     => 'Descrição complementar do ajuste',
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
