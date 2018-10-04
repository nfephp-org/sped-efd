<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class E310 extends Element implements ElementInterface
{
    const REG = 'E310';
    const LEVEL = 3;
    const PARENT = 'E300';

    protected $parameters = [
        'IND_MOV_FCP_DIFAL' => [
            'type'     => 'string',
            'regex'    => '^[0|1]$',
            'required' => true,
            'info'     => 'Indicador de movimento: '
            .'0 – Sem operações '
            .'1 – Com operações',
            'format'   => ''
        ],
        'VL_SLD_CRED_ANT_DIFAL' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor do "Saldo credor de período anterior – ICMS Diferencial de '
            .'Alíquota da UF de Origem/Destino"',
            'format'   => '15v2'
        ],
        'VL_TOT_DEBITOS_DIFAL' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total dos débitos por "Saídas e prestações com débito do ICMS '
            .'referente ao diferencial de alíquota devido à UF de Origem/Destino"',
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
        'VL_TOT_CREDITOS_DIFAL' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total dos créditos do ICMS referente ao diferencial de alíquota '
            .'devido à UF de Origem/Destino',
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
        'VL_RECOL_DIFAL' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor recolhido ou a recolher referente ao ICMS Diferencial de Alíquota '
            .'da UF de Origem/Destino (08-09)',
            'format'   => '15v2'
        ],
        'VL_SLD_CRED_TRANSPORTAR_DIFAL' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Saldo credor a transportar para o período seguinte referente ao ICMS Diferencial '
            .'de Alíquota da UF de Origem/Destino',
            'format'   => '15v2'
        ],
        'DEB_ESP_DIFAL' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valores recolhidos ou a recolher, extra- apuração - ICMS Diferencial de Alíquota '
            .'da UF de Origem/Destino.',
            'format'   => '15v2'
        ],
        'VL_SLD_CRED_ANT_FCP' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor do "Saldo credor de período anterior – FCP"',
            'format'   => '15v2'
        ],
        'VL_TOT_DEB_FCP' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total dos débitos FCP por "Saídas e prestações”',
            'format'   => '15v2'
        ],
        'VL_OUT_DEB_FCP' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total dos ajustes "Outros débitos FCP" e “Estorno de créditos FCP”',
            'format'   => '15v2'
        ],
        'VL_TOT_CRED_FCP' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total dos créditos FCP por Entradas',
            'format'   => '15v2'
        ],
        'VL_OUT_CRED_FCP' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total de Ajustes "Outros créditos FCP" e “Estorno de débitos FCP”',
            'format'   => '15v2'
        ],
        'VL_SLD_DEV_ANT_FCP' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total de Saldo devedor FCP antes das deduções',
            'format'   => '15v2'
        ],
        'VL_DEDUCOES_FCP' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total das deduções "FCP"',
            'format'   => '15v2'
        ],
        'VL_RECOL_FCP' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor recolhido ou a recolher referente ao FCP (18–19)',
            'format'   => '15v2'
        ],
        'VL_SLD_CRED_TRANSPORTAR_FCP' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Saldo credor a transportar para o período seguinte referente ao FCP',
            'format'   => '15v2'
        ],
        'DEB_ESP_FCP' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valores recolhidos ou a recolher, extra- apuração - FCP',
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
         * Campo 08 (VL_SLD_DEV_ANT_DIFAL) Validação: Se (VL_TOT_DEBITOS_DIFAL + VL_OUT_DEB_DIFAL) menos
         * (VL_SLD_CRED_ANT_DIFAL + VL_TOT_CREDITOS_DIFAL + VL_OUT_CRED_DIFAL) for maior ou igual a ZERO,
         * então o resultado deverá ser igual ao VL_SLD_DEV_ANT_DIFAL; senão VL_SLD_DEV_ANT_DIFAL deve
         * ser igual a ZERO.
         */
        $somatorio = $this->values->vl_tot_debitos_difal
                    + $this->values->vl_out_deb_difal
                    - $this->values->vl_sld_cred_ant_difal
                    - $this->values->vl_tot_creditos_difal
                    - $this->values->vl_out_cred_difal;
        
        if (($somatorio > 0 && $this->values->vl_sld_dev_ant_difal == 0)
        || ($somatorio < 0 && $this->values->vl_sld_dev_ant_difal != 0)) {
            throw new \InvalidArgumentException("[" . self::REG . "] Se (VL_TOT_DEBITOS_DIFAL + VL_OUT_DEB_DIFAL) "
            ."menos (VL_SLD_CRED_ANT_DIFAL + VL_TOT_CREDITOS_DIFAL + VL_OUT_CRED_DIFAL) for maior ou igual a "
            ."ZERO, então o resultado deverá ser igual ao VL_SLD_DEV_ANT_DIFAL; senão VL_SLD_DEV_ANT_DIFAL deve "
            ."ser igual a ZERO.");
        }

        /*
         * Campo 10 (VL_RECOL_DIFAL) Validação: Se (VL_SLD_DEV_ANT_DIFAL menos VL_DEDUCOES_DIFAL) for maior ou igual
         * a ZERO, então VL_RECOL_DIFAL é igual ao resultado da equação; senão o VL_RECOL_DIFAL deverá ser igual a ZERO.
         */
        $diferenca = $this->values->vl_sld_dev_ant_difal - $this->values->vl_deducoes_difal;
        
        if (($diferenca > 0 && $this->values->vl_recol_difal == 0)
        || ($diferenca < 0 && $this->values->vl_recol_difal != 0)) {
            throw new \InvalidArgumentException("[" . self::REG . "] Se (VL_SLD_DEV_ANT_DIFAL menos VL_DEDUCOES_DIFAL) for maior ou igual a ZERO, "
            ."então VL_RECOL é igual ao resultado da equação; senão o VL_RECOL deverá ser igual a ZERO.");
        }

         /*
         * Campo 18 (VL_SLD_DEV_ANT_FCP) Validação: Se (VL_TOT_DEB_FCP + VL_OUT_DEB_FCP) menos (VL_SLD_CRED_ANT_FCP
         * + VL_TOT_CRED_FCP + VL_OUT_CRED_FCP) for maior ou igual a ZERO, então o resultado deverá ser igual ao
         * VL_SLD_DEV_ANT_FCP; senão VL_SLD_DEV_ANT_FCP deve ser igual a ZERO.
         */
        $somatorio = $this->values->vl_tot_deb_fcp
                    + $this->values->vl_out_deb_fcp
                    - $this->values->vl_sld_cred_ant_fcp
                    - $this->values->vl_tot_cred_fcp
                    - $this->values->vl_out_cred_fcp;
        
        if (($somatorio > 0 && $this->values->vl_sld_dev_ant_fcp == 0)
        || ($somatorio < 0 && $this->values->vl_sld_dev_ant_fcp != 0)) {
            throw new \InvalidArgumentException("[" . self::REG . "] Se (VL_TOT_DEB_FCP + VL_OUT_DEB_FCP) menos (VL_SLD_CRED_ANT_FCP "
            ."+ VL_TOT_CRED_FCP + VL_OUT_CRED_FCP) for maior ou igual a ZERO, então o resultado deverá ser igual ao "
            ."VL_SLD_DEV_ANT_FCP; senão VL_SLD_DEV_ANT_FCP deve ser igual a ZERO.");
        }

        /*
        * Campo 20 (VL_RECOL_FCP) Validação: Se (VL_SLD_DEV_ANT_FCP menos VL_DEDUCOES_FCP) for maior
        * ou igual a ZERO, então VL_RECOL_FCP é igual ao resultado da equação; senão o VL_RECOL_FCP
        * deverá ser igual a ZERO.
        */
        $diferenca = $this->values->vl_sld_dev_ant_fcp - $this->values->vl_deducoes_fcp;
        
        if (($diferenca > 0 && $this->values->vl_recol_fcp == 0)
        || ($diferenca < 0 && $this->values->vl_recol_fcp != 0)) {
            throw new \InvalidArgumentException("[" . self::REG . "] Se (VL_SLD_DEV_ANT_FCP menos VL_DEDUCOES_FCP) for maior "
            ."ou igual a ZERO, então VL_RECOL_FCP é igual ao resultado da equação; senão o VL_RECOL_FCP "
            ."deverá ser igual a ZERO.");
        }

        /*
         * Campo 21 (VL_SLD_CRED_TRANSPORTAR_FCP) Validação: Se (VL_SLD_CRED_ANT_FCP + VL_TOT_CRED_FCP
         * + VL_OUT_CRED_FCP + VL_DEDUÇÕES_FCP) menos (VL_TOT_DEB_FCP + VL_OUT_DEB_FCP) for maior que ZERO,
         * então VL_SLD_CRED_TRANSPORTAR_FCP deve ser igual ao resultado da equação; senão
         * VL_SLD_CRED_TRANSPORTAR_FCP será ZERO.
         */
        $somatorio = $this->values->vl_sld_cred_ant_fcp
                    + $this->values->vl_tot_cred_fcp
                    + $this->values->vl_out_cred_fcp
                    + $this->values->vl_deducoes_fcp
                    - $this->values->vl_tot_deb_fcp
                    - $this->values->vl_out_deb_fcp;
        
        if (($somatorio > 0 && $this->values->vl_sld_cred_transportar_fcp == 0)
        || ($somatorio < 0 && $this->values->vl_sld_cred_transportar_fcp != 0)) {
            throw new \InvalidArgumentException("[" . self::REG . "] Se (VL_SLD_CRED_ANT_FCP + VL_TOT_CRED_FCP "
            ."+ VL_OUT_CRED_FCP + VL_DEDUÇÕES_FCP) menos (VL_TOT_DEB_FCP + VL_OUT_DEB_FCP) for maior que ZERO, "
            ."então VL_SLD_CRED_TRANSPORTAR_FCP deve ser igual ao resultado da equação; senão "
            ."VL_SLD_CRED_TRANSPORTAR_FCP será ZERO.");
        }
    }
}
