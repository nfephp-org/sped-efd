<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class D160 extends Element implements ElementInterface
{
    const REG = 'D160';
    const LEVEL = 3;
    const PARENT = '';

    protected $parameters = [
        'DESPACHO' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{0}$',
            'required' => true,
            'info'     => 'Identificação do número do despacho',
            'format'   => ''
        ],
        'CNPJ_CPF_REM' => [
            'type'     => 'numeric',
            'regex'    => '^[0-9]{14}$',
            'required' => true,
            'info'     => 'CNPJ ou CPF do remetente das mercadorias que constam na nota fiscal',
            'format'   => ''
        ],
        'IE_REM' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{14}$',
            'required' => true,
            'info'     => 'Inscrição Estadual do remetente das mercadorias que constam na nota fiscal',
            'format'   => ''
        ],
        'COD_MUN_ORI' => [
            'type'     => 'numeric',
            'regex'    => '',
            'required' => true,
            'info'     => 'Código do Município de origem, conforme tabela IBGE',
            'format'   => ''
        ],
        'CNPJ_CPF_DEST' => [
            'type'     => 'numeric',
            'regex'    => '^[0-9]{14}$',
            'required' => true,
            'info'     => 'CNPJ ou CPF do destinatário das mercadorias que constam na nota fiscal',
            'format'   => ''
        ],
        'IE_DEST' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{14}$',
            'required' => true,
            'info'     => 'Inscrição Estadual do destinatário das mercadorias que constam na nota fiscal.',
            'format'   => ''
        ],
        'COD_MUN_DEST' => [
            'type'     => 'numeric',
            'regex' => '^[0-9]{7}$',
            'required' => true,
            'info'     => 'Código do Município de destino, conforme tabela IBGE',
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
