<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use stdClass;

class D140 extends Element
{
    const REG = 'D140';
    const LEVEL = 3;
    const PARENT = '';

    protected $parameters = [
        'COD_PART_CONSG' => [
            'type'     => 'string',
            'regex'    => '^.{1,60}$',
            'required' => true,
            'info'     => 'Código do participante (campo 02 do Registro 0150):'
            . '- consignatário, se houver',
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
        'IND_VEIC' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{1}$',
            'required' => true,
            'info'     => 'Indicador do tipo do veículo transportador: 0 - Embarcação'
            . '1 - Empurrador/rebocador',
            'format'   => ''
        ],
        'VEIC_ID' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{0}$',
            'required' => true,
            'info'     => 'Identificação da embarcação (IRIM ou Registro CPP)',
            'format'   => ''
        ],
        'IND_NAV' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{1}$',
            'required' => true,
            'info'     => 'Indicador do tipo da navegação: 0 - Interior'
            . '1 - Cabotagem',
            'format'   => ''
        ],
        'VIAGEM' => [
            'type'     => 'numeric',
            'regex'    => '',
            'required' => true,
            'info'     => 'Número da viagem',
            'format'   => ''
        ],
        'VL_FRT_LIQ' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor líquido do frete',
            'format'   => '15v2'
        ],
        'VL_DESP_PORT' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor das despesas portuárias',
            'format'   => '15v2'
        ],
        'VL_DESP_CAR_DESC' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor das despesas com carga e descarga',
            'format'   => '15v2'
        ],
        'VL_OUT' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Outros valores',
            'format'   => '15v2'
        ],
        'VL_FRT_BRT' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor bruto do frete',
            'format'   => '15v2'
        ],
        'VL_FRT_MM' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor adicional do frete para renovação da Marinha Mercante',
            'format'   => '15v2'
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
