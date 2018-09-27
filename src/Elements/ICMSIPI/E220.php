<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class E220 extends Element implements ElementInterface
{
    const REG = 'E220';
    const LEVEL = 4;
    const PARENT = 'E110';

    protected $parameters = [
        'COD_AJ_APUR' => [
            'type'     => 'string',
            'regex'    => '^.{8}$',
            'required' => true,
            'info'     => 'Código do ajuste da apuração e dedução, '
            .'conforme a Tabela indicada no item 5.1.1',
            'format'   => ''
        ],
        'DESCR_COMPL_AJ' => [
            'type'     => 'string',
            'regex'    => '^.*$',
            'required' => false,
            'info'     => 'Descrição complementar do ajuste da apuração',
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
     * @param \stdClass $std
     */
    public function __construct(\stdClass $std)
    {
        parent::__construct(self::REG);
        $this->std = $this->standarize($std);
    }
}
