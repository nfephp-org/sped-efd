<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class E110 extends Element implements ElementInterface
{
    const REG = 'E110';
    const LEVEL = 3;
    const PARENT = 'E100';

    protected $parameters = [
        'VL_TOT_DEBITOS' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total dos débitos por "Saídas e prestações com débito do imposto"',
            'format'   => '15v2'
        ],
        'VL_AJ_DEBITOS' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total dos ajustes a débito decorrentes do documento fiscal.',
            'format'   => '15v2'
        ],
        'VL_TOT_AJ_DEBITOS' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total de "Ajustes a débito"',
            'format'   => '15v2'
        ],
        'VL_ESTORNOS_CRED' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total de Ajustes “Estornos de créditos”',
            'format'   => '15v2'
        ],
        'VL_TOT_CREDITOS' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total dos créditos por "Entradas e aquisições com crédito do imposto"',
            'format'   => '15v2'
        ],
        'VL_AJ_CREDITOS' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total dos ajustes a crédito decorrentes do documento fiscal.',
            'format'   => '15v2'
        ],
        'VL_TOT_AJ_CREDITOS' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total de "Ajustes a crédito"',
            'format'   => '15v2'
        ],
        'VL_ESTORNOS_DEB' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total de Ajustes “Estornos de Débitos”',
            'format'   => '15v2'
        ],
        'VL_SLD_CREDOR_ANT' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total de "Saldo credor do período anterior"',
            'format'   => '15v2'
        ],
        'VL_SLD_APURADO' => [
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
            'info'     => 'Valor total de "Deduções"',
            'format'   => '15v2'
        ],
        'VL_ICMS_RECOLHER' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total de "ICMS a recolher (11-12)',
            'format'   => '15v2'
        ],
        'VL_SLD_CREDOR_TRANSPORTAR' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total de "Saldo credor a transportar para o período seguinte”',
            'format'   => '15v2'
        ],
        'DEB_ESP' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valores recolhidos ou a recolher, extra apuração.',
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
         * Campo 13 (VL_ICMS_RECOLHER) Validação: o valor informado deve corresponder à diferença entre o
         * campo VL_SLD_APURADO e o campo VL_TOT_DED. Se o resultado dessa operação for negativo, informe
         * o valor zero neste campo, e o valor absoluto correspondente no campo VL_SLD_CREDOR_TRANSPORTAR.
         */
        $diferenca = $this->values->vl_sld_apurado - $this->values->vl_tot_ded;
        if ($diferenca < 0 && ($this->values->vl_icms_recolher != 0 || $this->values->vl_sld_credor_transportar == 0)) {
            $this->errors[] = "[" . self::REG . "] O valor informado deve corresponder à diferença "
            . "entre o campo VL_SLD_APURADO e o campo VL_TOT_DED. Se o resultado dessa operação for negativo, "
            . "informe o valor zero neste campo, e o valor absoluto correspondente no "
            . "campo VL_SLD_CREDOR_TRANSPORTAR.";
        }

        /*
         * Campo 14 (VL_SLD_CREDOR_TRANSPORTAR) Validação: o valor informado deve ser preenchido com base
         * na expressão: soma do total de débitos (VL_TOT_DEBITOS) com total de ajustes
         * (VL_AJ_DEBITOS +VL_TOT_AJ_DEBITOS) com total de estorno de crédito (VL_ESTORNOS_CRED) menos a
         * soma do total de créditos (VL_TOT_CREDITOS) com total de ajuste de créditos
         * (VL_,AJ_CREDITOS + VL_TOT_AJ_CREDITOS) com total de estorno de débito (VL_ESTORNOS_DEB)
         * com saldo credor do período anterior (VL_SLD_CREDOR_ANT). Se o valor da expressão for maior
         * ou igual a “0” (zero), então este valor deve ser informado neste campo e o campo 14
         * (VL_SLD_CREDOR_TRANSPORTAR) deve ser igual a “0” (zero). Se o valor da expressão for menor que
         * “0” (zero), então este campo deve ser preenchido com “0” (zero) e o valor absoluto da expressão deve
         * ser informado no campo VL_SLD_CREDOR_TRANSPORTAR, adicionado ao valor total das deduções (VL_TOT_DED)
         */
        $somatorio = $this->values->vl_tot_debitos
                    + $this->values->vl_aj_debitos
                    + $this->values->vl_tot_aj_debitos
                    + $this->values->vl_estornos_cred
                    - $this->values->vl_tot_creditos
                    - $this->values->vl_aj_creditos
                    - $this->values->vl_tot_aj_creditos
                    - $this->values->vl_estornos_deb
                    - $this->values->vl_sld_credor_ant
                    - $this->values->vl_tot_ded;

        if (($somatorio >= 0 && $this->values->vl_sld_credor_transportar != 0)
        || ($somatorio < 0 && $this->values->vl_sld_credor_transportar == 0)) {
            $this->errors[] = "[" . self::REG . "] O valor informado deve ser preenchido com base "
            . "na expressão: soma do total de débitos (VL_TOT_DEBITOS) com total de ajustes "
            . "(VL_AJ_DEBITOS +VL_TOT_AJ_DEBITOS) com total de estorno de crédito (VL_ESTORNOS_CRED) menos a "
            . "soma do total de créditos (VL_TOT_CREDITOS) com total de ajuste de créditos "
            . "(VL_,AJ_CREDITOS + VL_TOT_AJ_CREDITOS) com total de estorno de débito (VL_ESTORNOS_DEB) "
            . "com saldo credor do período anterior (VL_SLD_CREDOR_ANT). Se o valor da expressão for maior "
            . "ou igual a “0” (zero), então este valor deve ser informado neste campo e o campo 14 "
            . "(VL_SLD_CREDOR_TRANSPORTAR) deve ser igual a “0” (zero). Se o valor da expressão for menor que "
            . "“0” (zero), então este campo deve ser preenchido com “0” (zero) e o valor absoluto da expressão deve "
            . "ser informado no campo VL_SLD_CREDOR_TRANSPORTAR, adicionado ao valor total das deduções (VL_TOT_DED)";
        }
    }
}
