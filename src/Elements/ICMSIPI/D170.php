<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class D170 extends Element implements ElementInterface
{
    const REG = 'D170';
    const LEVEL = 3;
    const PARENT = '';

    protected $parameters = [
        'COD_PART_CONSG' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Código do participante (campo 02 do Registro 0150): consignatário, se houver',
            'format'   => '15v60'
        ],
        'COD_PART_RED' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Código do participante (campo 02 do Registro 0150): redespachante, se houver',
            'format'   => '15v60'
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
        'OTM' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{0}$',
            'required' => true,
            'info'     => 'Registro do operador de transporte multimodal',
            'format'   => ''
        ],
        'IND_NAT_FRT' => [
            'type'     => 'numeric',
            'regex'    => '',
            'required' => true,
            'info'     => 'Indicador da natureza do frete: 0- Negociável'
            . '1- Não negociável',
            'format'   => ''
        ],
        'VL_LIQ_FRT' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor líquido do frete',
            'format'   => '15v2'
        ],
        'VL_GRIS' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor do gris (gerenciamento de risco)',
            'format'   => '15v2'
        ],
        'VL_PDG' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Somatório dos valores de pedágio',
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
        'VEIC_ID' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{7}$',
            'required' => true,
            'info'     => 'Placa de identificação do veículo',
            'format'   => ''
        ],
        'UF_ID' => [
            'type'     => 'string',
            'regex'    => '^[a-zA-Z]{2}$',
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
