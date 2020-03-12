<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\Common\Keys;
use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

/**
 * REGISTRO C810: ITENS  DO  DOCUMENTO  DO  CUPOM  FISCAL ELETRÔNICO  –  SAT (CF-E-SAT)  (CÓDIGO 59):
 * @package NFePHP\EFD\Elements\ICMSIPI
 */
class C810 extends Element implements ElementInterface
{
    const REG = 'C810';
    const LEVEL = 3;
    const PARENT = 'C800';

    protected $parameters = [
        'NUM_ITEM' => [
            'type'     => 'numeric',
            'regex'    => '^[0-9]{3}$',
            'required' => true,
            'info'     => 'Número do item no documento fiscal',
            'format'   => ''
        ],
        'COD_ITEM' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{60}$',
            'required' => true,
            'info'     => 'Código do item (campo 02 do Registro 0200)',
            'format'   => ''
        ],
        'QTD' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Quantidade do item',
            'format'   => '15v5'
        ],
        'UNID' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{6}$',
            'required' => true,
            'info'     => 'Unidade do item (Campo 02 do registro 0190)',
            'format'   => ''
        ],
        'VL_ITEM' => [
            'type'     => 'numeric',
            'regex'    => '^[0-9]{2}$',
            'required' => true,
            'info'     => 'Valor total do item (mercadorias ou serviços)',
            'format'   => ''
        ],
        'CST_ICMS' => [
            'type' => 'string',
            'regex' => '^[0-9]{3}$',
            'required' => true,
            'info' => 'Código da Situação Tributária',
            'format' => ''
        ],
        'CFOP' => [
            'type' => 'string',
            'regex' => '^[0-9]{4}$',
            'required' => true,
            'info' => 'Código Fiscal de Operação e Prestação',
            'format' => ''
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
