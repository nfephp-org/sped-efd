<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use stdClass;

class Z1391 extends Element
{
    const REG = '1391';
    const LEVEL = 3;
    const PARENT = '1390';

    protected $parameters = [
        'DT_REGISTRO' => [
            'type'     => 'string',
            'regex'    => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => true,
            'info'     => 'Data de produção (DDMMAAAA)',
            'format'   => ''
        ],
        'QTD_MOID' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info'     => 'Quantidade de cana esmagada (toneladas)',
            'format'   => '15v2'
        ],
        'ESTQ_INI' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Estoque inicial (litros / Kg)',
            'format'   => '15v2'
        ],
        'QTD_PRODUZ' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info'     => 'Quantidade produzida (litros / Kg)',
            'format'   => '15v2'
        ],
        'ENT_ANID_HID' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info'     => 'Entrada de álcool anidro decorrente da transformação '
            .'do álcool hidratado ou Entrada de álcool hidratado decorrente da '
            .'transformação do álcool anidro (litros)',
            'format'   => '15v2'
        ],
        'OUTR_ENTR' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info'     => 'Outras entradas (litros / Kg)',
            'format'   => '15v2'
        ],
        'PERDA' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info'     => 'Evaporação (litros) ou Quebra de peso (Kg)',
            'format'   => '15v2'
        ],
        'CONS' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info'     => 'Consumo (litros)',
            'format'   => '15v2'
        ],
        'SAI_ANI_HID' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info'     => 'Saída para transformação (litros).',
            'format'   => '15v2'
        ],
        'SAIDAS' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info'     => 'Saídas (litros / Kg)',
            'format'   => '15v2'
        ],
        'ESTQ_FIN' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Estoque final (litros / Kg)',
            'format'   => '15v2'
        ],
        'ESTQ_INI_MEL' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info'     => 'Estoque inicial de mel residual (Kg)',
            'format'   => '15v2'
        ],
        'PROD_DIA_MEL' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info'     => 'Produção de mel residual (Kg) e entradas de mel (Kg)',
            'format'   => '15v2'
        ],
        'UTIL_MEL' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info'     => 'Mel residual utilizado (Kg) e saídas de mel (Kg)',
            'format'   => '15v2'
        ],
        'PROD_ALC_MEL' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info'     => 'Produção de álcool (litros) ou açúcar (Kg) proveniente do mel residual.',
            'format'   => '15v2'
        ],
        'OBS' => [
            'type'     => 'string',
            'regex'    => '^.*$',
            'required' => false,
            'info'     => 'Observações',
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
