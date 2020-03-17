<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class D130 extends Element implements ElementInterface
{
    const REG = 'D130';
    const LEVEL = 3;
    const PARENT = '';

    protected $parameters = [
        'COD_PART_CONSG' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{60}$',
            'required' => true,
            'info'     => 'Código do participante (campo 02 do Registro 0150):'
            . '- consignatário, se houver',
            'format'   => ''
        ],
        'COD_PART_RED' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{60}$',
            'required' => true,
            'info'     => 'Código do participante (campo 02 do Registro 0150):'
            . '- redespachado, se houver',
            'format'   => ''
        ],
        'IND_FRT_RED' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{1}$',
            'required' => true,
            'info'     => 'Indicador do tipo do frete da operação de redespacho: 0 - Sem redespacho;'
            . '1 - Por conta do emitente'
            . '2 - Por conta do destinatário 9 - Outros.',
            'format'   => ''
        ],
        'COD_MUN_ORIG' => [
            'type'     => 'numeric',
            'regex'    => '',
            'required' => true,
            'info'     => 'Código do município de origem do serviço, conforme a tabela IBGE',
            'format'   => ''
        ],
        'COD_MUN_DEST' => [
            'type'     => 'numeric',
            'regex'    => '',
            'required' => true,
            'info'     => 'Código do município de destino, conforme a tabela IBGE',
            'format'   => ''
        ],
        'VEIC_ID' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{7}$',
            'required' => true,
            'info'     => 'Placa de identificação do veículo',
            'format'   => ''
        ],
        'VL_LIQ_FRT' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor líquido do frete',
            'format'   => '15v2'
        ],
        'VL_SEC_CAT' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Soma de valores de Sec/Cat (serviços de coleta/custo adicional de transporte)',
            'format'   => '15v2'
        ],
        'VL_DESP' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Soma de valores de despacho',
            'format'   => '15v2'
        ],
        'VL_PEDG' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Soma dos valores de pedágio',
            'format'   => '15v2'
        ],
        'VL_OUT' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Outros valores',
            'format'   => '15v2'
        ],
        'VL_FRT' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total do frete',
            'format'   => '15v2'
        ],
        'UF_ID' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{2}$',
            'required' => true,
            'info'     => 'Sigla da UF da placa do veículo',
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
