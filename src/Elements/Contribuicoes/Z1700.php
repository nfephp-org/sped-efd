<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use stdClass;

class Z1700 extends Element
{
    const REG = '1700';
    const LEVEL = 2;
    const PARENT = '1001';

    protected $parameters = [
        'IND_NAT_RET' => [
            'type' => 'numeric',
            'regex' => '^(01|02|03|04|05|09)$',
            'required' => false,
            'info' => 'Indicador de Natureza da Retenção na Fonte até 2013 ' .
                ' 01 - Retenção por Órgãos, Autarquias e Fundações Federais 02 - Retenção por ' .
                'outras Entidades da Administração Pública Federal 03 - Retenção por Pessoas ' .
                'Jurídicas de Direito Privado 04 - Recolhimento por Sociedade Cooperativa 05 - Retenção ' .
                'por Fabricante de Máquinas e Veículos 99 - Outras Retenções ',
            'format' => ''
        ],
        'PR_REC_RET' => [
            'type' => 'numeric',
            'regex' => '^(\d{6})$',
            'required' => false,
            'info' => 'Período do Recebimento e da Retenção (MM/AAAA) ',
            'format' => ''
        ],
        'VL_RET_APU' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor Total da Retenção ',
            'format' => '15v2'
        ],
        'VL_RET_DED' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor da Retenção deduzida da Contribuição devida no período da escrituração e em ' .
                'períodos anteriores. ',
            'format' => '15v2'
        ],
        'VL_RET_PER' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor da Retenção utilizada mediante Pedido de Restituição. ',
            'format' => '15v2'
        ],
        'VL_RET_DCOMP' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor da Retenção utilizada mediante Declaração de Compensação. ',
            'format' => '15v2'
        ],
        'SLD_RET' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Saldo de Retenção a utilizar em períodos de apuração futuros (04 - 05 - 06 - 07). ',
            'format' => '15v2'
        ],

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

    public function postValidation()
    {
        $calculo = $this->values->vl_ret_apu-
            $this->values->vl_ret_ded-
            $this->values->vl_ret_per-
            $this->values->vl_ret_dcomp;
        if (number_format($this->values->sld_ret, 2)!==number_format($calculo, 2)) {
            $this->errors[] = "[" . self::REG . "] " .
                "O valor do campo SLD_RET deverá ser igual a
                VL_RET_APU - VL_RET_DED - VL_RET_PER - VL_RET_DCOMP.";
        }
    }
}
