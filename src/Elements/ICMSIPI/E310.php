<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class E310 extends Element implements ElementInterface
{
    const REG = 'E310';
    const LEVEL = 3;
    const PARENT = 'E100';

    protected $parameters = [
        'IND_MOV_DIFAL' => [
            'type'     => 'string',
            'regex'    => '^[0|1]$',
            'required' => true,
            'info'     => 'Indicador de movimento: '
            .'0 – Sem operações com ICMS Diferencial de Alíquota da UF de Origem/Destino '
            .'1 – Com operações de ICMS Diferencial de Alíquota da UF de Origem/Destino',
            'format'   => ''
        ],
        'VL_SLD_CRED_ANT_DIFAL' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor do "Saldo credor de período anterior – ICMS Diferencial de Alíquota da UF de',
            'format'   => '15v2'
        ],
        'VL_TOT_DEBITOS_DIFAL' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total dos débitos por "Saídas e prestações com débito do ICMS '
            .'referente ao diferencial de alíquota devido à UF do Remetente/Destinatário"',
            'format'   => '15v2'
        ],
        'VL_OUT_DEB_DIFAL' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor Total dos ajustes "Outros débitos ICMS Diferencial de Alíquota da UF de '
            .'Origem/Destino" e “Estorno de créditos ICMS Diferencial de Alíquota da UF de Origem/Destino',
            'format'   => '15v2'
        ],
        'VL_TOT_DEB_FCP' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total dos débitos FCP por "Saídas e prestações”',
            'format'   => '15v2'
        ],
        'VL_TOT_CREDITOS_DIFAL' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total dos créditos do ICMS referente ao diferencial de alíquota '
            .'devido à UF dos Remetente/ Destinatário',
            'format'   => '15v2'
        ],
        'VL_TOT_CRED_FCP' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total dos créditos FCP por Entradas',
            'format'   => '15v2'
        ],
        'VL_OUT_CRED_DIFAL' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total de Ajustes "Outros créditos ICMS Diferencial de Alíquota da UF de '
            .'Origem/Destino" e “Estorno de débitos ICMS Diferencial de Alíquota da UF de Origem/Destino”',
            'format'   => '15v2'
        ],
        'VL_SLD_DEV_ANT_DIFAL' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total de Saldo devedor ICMS Diferencial de Alíquota da UF de '
            .'Origem/Destino antes das deduções',
            'format'   => '15v2'
        ],
        'VL_DEDUCOES_DIFAL' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total dos ajustes "Deduções ICMS Diferencial de Alíquota da UF de Origem/Destino"',
            'format'   => '15v2'
        ],
        'VL_RECOL' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor recolhido ou a recolher referente a FCP e Imposto do Diferencial de '
            .'Alíquota da UF de Origem/Destino (10-11)',
            'format'   => '15v2'
        ],
        'VL_SLD_CRED_TRANSPORTAR' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Saldo credor a transportar para o período seguinte referente a FCP e '
            .'Imposto do Diferencial de Alíquota da UF de Origem/Destino',
            'format'   => '15v2'
        ],
        'DEB_ESP_DIFAL' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valores recolhidos ou a recolher, extra- apuração.',
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
