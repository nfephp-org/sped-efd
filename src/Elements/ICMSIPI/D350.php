<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class D350 extends Element implements ElementInterface
{
    const REG = 'D350';
    const LEVEL = 2;
    const PARENT = '';

    protected $parameters = [
        'COD_MOD' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{2}$',
            'required' => true,
            'info'     => 'Código do modelo do documento fiscal, conforme a tabela 4.1.1',
            'format'   => ''
        ],
        'ECF_MOD' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{20}$',
            'required' => true,
            'info'     => 'Modelo do equipamento',
            'format'   => ''
        ],
        'ECF_FAB' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{21}$',
            'required' => true,
            'info'     => 'Número de série de fabricação do ECF',
            'format'   => ''
        ],
        'ECF_CX' => [
            'type'     => 'numeric',
            'regex'    => '^[0-9]{3}$',
            'required' => true,
            'info'     => 'Número do caixa atribuído ao ECF',
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
