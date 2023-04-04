<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use stdClass;

class D195 extends Element
{
    const REG = 'D195';
    const LEVEL = 3;
    const PARENT = '';

    protected $parameters = [
        'COD_OBS' => [
            'type'     => 'string',
            'regex'    => '^.{1,6}$',
            'required' => true,
            'info'     => 'Código da observação do lançamento fiscal (campo 02 do Registro 0460)',
            'format'   => ''
        ],
        'TXT_COMPL' => [
            'type'     => 'string',
            'regex'    => '^.{1,255}$',
            'required' => true,
            'info'     => 'Descrição complementar do código de observação',
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
