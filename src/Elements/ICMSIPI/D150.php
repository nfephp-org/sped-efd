<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class D150 extends Element implements ElementInterface
{
    const REG = 'D150';
    const LEVEL = 3;
    const PARENT = '';

    protected $parameters = [
        'COD_MUN_ORIG' => [
            'type'     => 'numeric',
            'regex' => '^[0-9]{7}$',
            'required' => true,
            'info'     => 'Código do município de origem do serviço, conforme a tabela IBGE',
            'format'   => ''
        ],
        'COD_MUN_DEST' => [
            'type'     => 'numeric',
            'regex' => '^[0-9]{7}$',
            'required' => true,
            'info'     => 'Código do município de destino, conforme a tabela IBGE',
            'format'   => ''
        ],
        'VEIC_ID' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{0}$',
            'required' => true,
            'info'     => 'Identificação da aeronave (DAC)',
            'format'   => ''
        ],
        'VIAGEM' => [
            'type'     => 'string',
            'regex'    => '',
            'required' => true,
            'info'     => 'Número do vôo',
            'format'   => ''
        ],
        'IND_TFA' => [
            'type'     => 'numeric',
            'regex'    => '',
            'required' => true,
            'info'     => 'Indicador do tipo de tarifa aplicada: 0- Exp.'
            . '1- Enc.'
            . '2- C.I.'
            . '9- Outra',
            'format'   => ''
        ],
        'VL_PESO_TX' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Peso taxado',
            'format'   => '15v2'
        ],
        'VL_TX_TERR' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor da taxa terrestre',
            'format'   => '15v2'
        ],
        'VL_TX_RED' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor da taxa de redespacho',
            'format'   => '15v2'
        ],
        'VL_OUT' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Outros valores',
            'format'   => '15v2'
        ],
        'VL_TX_ADV' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor da taxa ad valorem',
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
