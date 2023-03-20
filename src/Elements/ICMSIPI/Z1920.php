<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class Z1920 extends Element implements ElementInterface
{
    const REG = '1920';
    const LEVEL = 4;
    const PARENT = '1910';

    protected $parameters = [
        'VL_TOT_TRANSF_DEBITOS_OA' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total dos débitos por “Saídas e prestações com débito do imposto”',
            'format'   => '15v2'
        ],
        'VL_TOT_AJ_DEBITOS_OA' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total de “Ajustes a débito”',
            'format'   => '15v2'
        ],
        'VL_ESTORNOS_CRED_OA' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'V alor total de Ajustes “Estornos de créditos”',
            'format'   => '15v2'
        ],
        'VL_TOT_TRANSF_CREDITOS_OA' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total dos créditos por “Entradas e aquisições com crédito do imposto”',
            'format'   => '15v2'
        ],
        'VL_TOT_AJ_CREDITOS_OA' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total de “Ajustes a crédito”',
            'format'   => '15v2'
        ],
        'VL_ESTORNOS_DEB_OA' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'V alor total de Ajustes “Estornos de Débitos”',
            'format'   => '15v2'
        ],
        'VL_SLD_CREDOR_ANT_OA' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total de “Saldo credor do período anterior”',
            'format'   => '15v2'
        ],
        'VL_SLD_APURADO_OA' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor do saldo devedor apurado',
            'format'   => '15v2'
        ],
        'VL_TOT_DED' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total de “Deduções”',
            'format'   => '15v2'
        ],
        'VL_ICMS_RECOLHER_OA' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total de "ICMS a recolher (09-10)',
            'format'   => '15v2'
        ],
        'VL_SLD_CREDOR_TRANSP_OA' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total de “Saldo credor a transportar para o período seguinte”',
            'format'   => '15v2'
        ],
        'DEB_ESP_OA' => [
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
        $this->postValidation();
    }

    public function postValidation()
    {
        /*
         * Campo 09 (VL_SLD_APURADO_OA) Validação: o valor informado deve ser preenchido com base na expressão:
         * soma do total de débitos transferidos (VL_TOT_TRANSF_DEBITOS_OA) com total de ajustes a débito
         * (VL_TOT_AJ_DEBITOS_OA) com total de estorno de crédito (VL_ESTORNOS_CRED_OA) menos a soma do total
         * de créditos transferidos (VL_TOT_TRANSF_CREDITOS_OA) com total de ajustes a crédito
         * (VL_AJ_CREDITOS_OA) com total de estorno de débito (VL_ESTORNOS_DEB_OA) com saldo credor do período
         * anterior (VL_SLD_CREDOR_ANT_OA). Se o valor da expressão for maior ou igual a “0” (zero), então este
         * valor deve ser informado neste campo e o campo 12 (VL_SLD_CREDOR_TRANSP_OA) deve ser igual a “0”
         * (zero). Se o valor da expressão for menor que “0” (zero), então este campo deve ser preenchido com
         * “0” (zero) e o valor absoluto da expressão deve ser informado no campo VL_SLD_CREDOR_TRANSP_OA.
         */
        $somatorio = $this->values->vl_tot_transf_debitos_oa;
        $somatorio += $this->values->vl_tot_aj_debitos_oa;
        $somatorio += $this->values->vl_estornos_cred_oa;
        $somatorio -= $this->values->vl_tot_transf_creditos_oa;
        $somatorio -= $this->values->vl_tot_aj_creditos_oa;
        $somatorio -= $this->values->vl_estornos_deb_oa;
        $somatorio -= $this->values->vl_sld_credor_ant_oa;

        if (($somatorio >= 0 && $this->values->vl_sld_credor_transp_oa != 0)
        || ($somatorio < 0 && $this->values->vl_sld_apurado_oa != 0)) {
            $this->errors[] = "[" . self::REG . "] " .
                " O valor informado deve ser preenchido com base na expressão: "
                ."soma do total de débitos transferidos (VL_TOT_TRANSF_DEBITOS_OA) "
                ."com total de ajustes a débito (VL_TOT_AJ_DEBITOS_OA) com total de "
                ."estorno de crédito (VL_ESTORNOS_CRED_OA) menos a soma do total de "
                ."créditos transferidos (VL_TOT_TRANSF_CREDITOS_OA) com total de "
                ."ajustes a crédito (VL_AJ_CREDITOS_OA) com total de estorno de "
                ."débito (VL_ESTORNOS_DEB_OA) com saldo credor do período anterior "
                ."(VL_SLD_CREDOR_ANT_OA). Se o valor da expressão for maior ou igual "
                ."a “0” (zero), então este valor deve ser informado neste campo e o "
                ."campo 12 (VL_SLD_CREDOR_TRANSP_OA) deve ser igual a “0” (zero). Se "
                ."o valor da expressão for menor que “0” (zero), então este campo "
                ."deve ser preenchido com “0” (zero) e o valor absoluto da expressão "
                ."deve ser informado no campo VL_SLD_CREDOR_TRANSP_OA.";
        }
    }
}
