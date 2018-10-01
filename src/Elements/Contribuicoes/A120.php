<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class A120 extends Element implements ElementInterface
{
    const REG = 'A120';
    const LEVEL = 4;
    const PARENT = 'A120';

    protected $parameters = [
        'VL_TOT_SERV' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor total do serviço, prestado por pessoa física ou jurídica domiciliada no exterior.',
            'format' => '15v2'
        ],
        'VL_BC_PIS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor da base de cálculo da Operação – PIS/PASEP – Importação',
            'format' => '15v2'
        ],
        'VL_PIS_IMP' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor pago/recolhido de PIS/PASEP – Importação',
            'format' => '15v2'
        ],
        'DT_PAG_PIS' => [
            'type' => 'string',
            'regex' => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => false,
            'info' => 'Data de pagamento do PIS/PASEP – Importação',
            'format' => ''
        ],
        'VL_BC_COFINS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor da base de cálculo da Operação – COFINS – Importação',
            'format' => '15v2'
        ],
        'VL_COFINS_IMP' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor pago/recolhido de COFINS – Importação',
            'format' => '15v2'
        ],
        'DT_PAG_COFINS' => [
            'type' => 'string',
            'regex' => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => false,
            'info' => 'Data de pagamento do COFINS – Importação',
            'format' => ''
        ],
        'LOC_EXE_SERV' => [
            'type' => 'string',
            'regex' => '^.{1}$',
            'required' => false,
            'info' => 'Local da execução do serviço: 
            0 – Executado no País; 
            1 – Executado no Exterior, cujo resultado se verifique no País.',
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
