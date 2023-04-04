<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use stdClass;

class D530 extends Element
{
    const REG = 'D530';
    const LEVEL = 3;
    const PARENT = '';

    protected $parameters = [
        'IND_SERV' => [
            'type' => 'string',
            'regex' => '^(0|1|2|3|4|9)$',
            'required' => true,
            'info' => 'Indicador do tipo de serviço prestado',
            'format' => ''
        ],
        'DT_INI_SERV' => [
            'type' => 'string',
            'regex' => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => false,
            'info' => 'Data em que se iniciou a prestação do serviço',
            'format' => ''
        ],
        'DT_FIN_SERV' => [
            'type' => 'string',
            'regex' => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => false,
            'info' => 'Data em que se encerrou a prestação do serviço',
            'format' => ''
        ],
        'PER_FISCAL' => [
            'type'     => 'numeric',
            'regex'    => '^(\d{6})$',
            'required' => true,
            'info'     => 'Período fiscal da prestação do serviço (MMAAAA)',
            'format'   => ''
        ],
        'COD_AREA' => [
            'type'     => 'string',
            'regex'    => '^(\d{255})$',
            'required' => false,
            'info'     => 'Código de área do terminal faturado',
            'format'   => ''
        ],
        'TERMINAL' => [
            'type'     => 'numeric',
            'regex'    => '^(\d{255})$',
            'required' => false,
            'info'     => 'Identificação do terminal faturado',
            'format'   => ''
        ],
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
