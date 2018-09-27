<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

/**
 * REGISTRO K100: PERÍODO DE APURAÇÃO DO ICMS/IPI
 * Este registro tem o objetivo de informar o período de apuração do ICMS ou do IPI,
 * prevalecendo os períodos mais curtos. Contribuintes com mais de um período de
 * apuração no mês declaram um registro K100 para cada período no mesmo arquivo.
 * Não podem ser informados dois ou mais registros com os mesmos campos DT_INI e DT_FIN.
 * Os períodos informados neste registro deverão abranger todo o período da escrituração,
 * conforme informado no Registro 0000.
 */
class K100 extends Element implements ElementInterface
{
    const REG = 'K100';
    const LEVEL = 2;
    const PARENT = 'K001';

    protected $parameters = [
        'DT_INI' => [
            'type'     => 'string',
            'regex'    => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => true,
            'info'     => 'Data inicial a que a apuração se refere',
            'format'   => ''
        ],
        'DT_FIN' => [
            'type'     => 'string',
            'regex'    => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => true,
            'info'     => 'Data final a que a apuração se refere',
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
