<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use stdClass;

class C141 extends Element
{
    const REG = 'C141';
    const LEVEL = 4;
    const PARENT = 'C140';

    protected $parameters = [
        'NUM_PARC' => [
            'type' => 'integer',
            'regex' => '^[0-9]{1,2}$',
            'required' => true,
            'info' => 'Número da parcela a receber/pagar',
            'format' => ''
        ],
        'DT_VCTO' => [
            'type' => 'string',
            'regex' => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => true,
            'info' => 'Data de vencimento da parcela',
            'format' => ''
        ],
        'VL_PARC' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Valor da parcela a receber/pagar',
            'format' => '15v2'
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
