<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class E210 extends Element implements ElementInterface
{
    const REG = 'E210';
    const LEVEL = 3;
    const PARENT = 'E100';

    protected $parameters = [
        'IND_MOV_ST' => [
            'type'     => 'string',
            'regex'    => '^[0|1]$',
            'required' => true,
            'info'     => 'Indicador de movimento: 0 – Sem operações com ST 1 – Com operações de ST',
            'format'   => ''
        ],
        'VL_SLD_CRED_ANT_ST' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor do "Saldo credor de período anterior – Substituição Tributária"',
            'format'   => '15v2'
        ],
        'VL_DEVOL_ST' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total do ICMS ST de devolução de mercadorias',
            'format'   => '15v2'
        ],
        'VL_RESSARC_ST' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total do ICMS ST de ressarcimentos',
            'format'   => '15v2'
        ],
        'VL_OUT_CRED_ST' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total de Ajustes "Outros créditos ST" e “Estorno de débitos ST”',
            'format'   => '15v2'
        ],
        'VL_AJ_CREDITOS_ST' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total dos ajustes a crédito de ICMS ST, provenientes de ajustes do documento fiscal.',
            'format'   => '15v2'
        ],
        'VL_RETENCAO_ST' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor Total do ICMS retido por Substituição Tributária',
            'format'   => '15v2'
        ],
        'VL_OUT_DEB_ST' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor Total dos ajustes "Outros débitos ST" " e “Estorno de créditos ST”',
            'format'   => '15v2'
        ],
        'VL_AJ_DEBITOS_ST' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total dos ajustes a débito de ICMS ST, provenientes de ajustes do documento fiscal.',
            'format'   => '15v2'
        ],
        'VL_SLD_DEV_ANT_ST' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total de Saldo devedor antes das deduções',
            'format'   => '15v2'
        ],
        'VL_DEDUCOES_ST' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total dos ajustes "Deduções ST"',
            'format'   => '15v2'
        ],
        'VL_ICMS_RECOL_ST' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Imposto a recolher ST (11-12)',
            'format'   => '15v2'
        ],
        'VL_SLD_CRED_ST_TRANSPORTAR' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Saldo credor de ST a transportar para o período '
            .'seguinte [(03+04+05+06+07+12)– (08+09+10)].',
            'format'   => '15v2'
        ],
        'DEB_ESP_ST' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valores recolhidos ou a recolher, extra- apuração.',
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
