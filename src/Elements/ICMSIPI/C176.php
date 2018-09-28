<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\Common\Keys;
use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

/**
 * REGISTRO C176: RESSARCIMENTO DE ICMS E FUNDO DE COMBATE À POBREZA
 * (FCP) EM OPERAÇÕES COM SUBSTITUIÇÃO TRIBUTÁRIA (CÓDIGO 01, 55)
 * Este registro deve ser informado quando da escrituração de documento fiscal, que acoberte operação que represente
 * desfazimento de substituição tributária realizada em operações anteriores.
 * @package NFePHP\EFD\Elements\ICMSIPI
 */
class C176 extends Element implements ElementInterface
{
    const REG = 'C176';
    const LEVEL = 4;
    const PARENT = 'C170';

    protected $parameters = [
        'COD_MOD_ULT_E' => [
            'type' => 'string',
            'regex' => '^(01|55)$',
            'required' => false,
            'info' => 'Código do modelo do documento fiscal relativa a última entrada',
            'format' => ''
        ],
        'NUM_DOC_ULT_E' => [
            'type' => 'numeric',
            'regex' => '^(\d{0,9})$',
            'required' => false,
            'info' => 'Número do documento fiscal relativa a última entrada',
            'format' => ''
        ],
        'SER_ULT_E' => [
            'type' => 'string',
            'regex' => '^.{0,3}$',
            'required' => false,
            'info' => 'Série do documento fiscal relativa a última entrada',
            'format' => ''
        ],
        'DT_ULT_E' => [
            'type' => 'string',
            'regex' => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => false,
            'info' => 'Data relativa a última entrada da mercadoria',
            'format' => ''
        ],
        'COD_PART_ULT_E' => [
            'type' => 'string',
            'regex' => '^.{0,60}$',
            'required' => false,
            'info' => 'Código do participante (do emitente do documento relativa a última entrada)',
            'format' => ''
        ],
        'QUANT_ULT_E' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Quantidade do item relativa a última entrada',
            'format' => '15v3'
        ],
        'VL_UNIT_ULT_E' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor unitário da mercadoria constante na NF relativa a última entrada.',
            'format' => '15v2'
        ],
        'VL_UNIT_BC_ST' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor unitário da base de cálculo do imposto pago por substituição.',
            'format' => '15v2'
        ],
        'CHAVE_NFE_ULT_E' => [
            'type' => 'numeric',
            'regex' => '^([0-9]{44})?$',
            'required' => false,
            'info' => 'Número completo da chave da NFe relativo à última entrada',
            'format' => ''
        ],
        'NUM_ITEM_ULT_E' => [
            'type' => 'numeric',
            'regex' => '^(\d{0,3})$',
            'required' => false,
            'info' => 'Número sequencial do item na NF entrada',
            'format' => ''
        ],
        'VL_UNIT_BC_ICMS_ULT_E' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor unitário da base de cálculo da operação própria do remetente 
            sob o regime comum de tributação',
            'format' => '15v2'
        ],
        'ALIQ_ICMS_ULT_E' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Alíquota do ICMS aplicável à última entrada da mercadoria',
            'format' => '15v2'
        ],
        'VL_UNIT_LIMITE_BC_ICMS_ULT_E' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor unitário da base de cálculo do ICMS relativo à última entrada da mercadoria',
            'format' => '15v2'
        ],
        'VL_UNIT_ICMS_ULT_E' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor unitário do crédito de ICMS sobre operações próprias do remetente',
            'format' => '15v2'
        ],
        'ALIQ_ST_ULT_E' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Alíquota do ICMS ST relativa à última entrada da mercadoria',
            'format' => '15v2'
        ],
        'VL_UNIT_RES' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor unitário do ressarcimento (parcial ou completo) de ICMS decorrente da quebra da ST',
            'format' => '15v2'
        ],
        'COD_RESP_RET' => [
            'type' => 'numeric',
            'regex' => '^([1-3]{1})$',
            'required' => false,
            'info' => 'Código que indica o responsável pela retenção do ICMS-ST:',
            'format' => ''
        ],
        'COD_MOT_RES' => [
            'type' => 'numeric',
            'regex' => '^([1-6]{1}|9)$',
            'required' => false,
            'info' => 'Código do motivo do ressarcimento',
            'format' => ''
        ],
        'CHAVE_NFE_RET' => [
            'type' => 'numeric',
            'regex' => '^([0-9]{44})?$',
            'required' => false,
            'info' => 'Número completo da chave da NF-e emitida pelo substituto',
            'format' => ''
        ],
        'COD_PART_NFE_RET' => [
            'type' => 'string',
            'regex' => '^.{0,60}$',
            'required' => false,
            'info' => 'Código do participante do emitente da NF-e em que houve a retenção do ICMS-ST',
            'format' => ''
        ],
        'SER_NFE_RET' => [
            'type' => 'string',
            'regex' => '^.{0,3}$',
            'required' => false,
            'info' => 'Série da NF-e em que houve a retenção do ICMS- ST',
            'format' => ''
        ],
        'NUM_NFE_RET' => [
            'type' => 'numeric',
            'regex' => '^(\d{0,9})$',
            'required' => false,
            'info' => 'Número da NF-e em que houve a retenção do ICMS-ST',
            'format' => ''
        ],
        'ITEM_NFE_RET' => [
            'type' => 'numeric',
            'regex' => '^(\d{0,3})$',
            'required' => false,
            'info' => 'Número sequencial do item na NF-e em que houve a retenção do ICMS-ST',
            'format' => ''
        ],
        'COD_DA' => [
            'type' => 'string',
            'regex' => '^(0|1)$',
            'required' => false,
            'info' => 'Código do modelo do documento de arrecadação',
            'format' => ''
        ],
        'NUM_DA' => [
            'type' => 'string',
            'regex' => '^(.*)$',
            'required' => false,
            'info' => 'Número do documento de arrecadação estadual, se houver',
            'format' => ''
        ],
        'VL_UNIT_RES_FCP_ST' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor unitário do ressarcimento (parcial ou completo) de FCP decorrente da quebra da ST',
            'format' => '15v2'
        ],
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

    /**
     * Transforma o valor com virgula em float para poder fazer os calculos de verificacao
     * @param $vlr
     * @return mixed
     */
    private function strToFloat($vlr)
    {
        return (float)str_replace(',', '.', $this->std->$vlr);
    }


    public function postValidation()
    {
        //Valida se QUANT_ULT_E é maior que zero
        if ($this->std->quant_ult_e <= 0) {
            throw new \InvalidArgumentException("[" . self::REG . "] " .
                " Quantidade do item relativa a última entrada (QUANT_ULT_E) deve ser maior do que zero ");
        }
        //Valida se VL_UNIT_ULT_E é maior que zero
        if ($this->std->quant_ult_e <= 0) {
            throw new \InvalidArgumentException("[" . self::REG . "] " .
                " Valor unitário da mercadoria constante na NF (VL_UNIT_ULT_E) deve ser maior do que zero ");
        }
        //Valida se VL_UNIT_BC_ST é maior que zero
        if ($this->std->quant_ult_e <= 0) {
            throw new \InvalidArgumentException("[" . self::REG . "] " .
                " Valor unitário da base de cálculo do imposto " .
                "pago por substituição (VL_UNIT_BC_ST) deve ser maior do que zero ");
        }

        //Valida se VL_UNIT_BC_ICMS_ULT_E é maior que zero
        if ($this->std->vl_unit_bc_icms_ult_e <= 0) {
            throw new \InvalidArgumentException("[" . self::REG . "] " .
                " Valor unitário da base de cálculo do ICMS " .
                "relativo à última entrada da mercadoria, limitado " .
                "ao valor da BC da retenção (VL_UNIT_BC_ICMS_ULT_E) deve ser maior do que zero ");
        }
        //Valida se ALIQ_ICMS_ULT_E é maior que zero
        if ($this->std->aliq_icms_ult_e <= 0) {
            throw new \InvalidArgumentException("[" . self::REG . "] " .
                "Alíquota do ICMS aplicável à última entrada da mercadoria  " .
                "(ALIQ_ICMS_ULT_E) deve ser maior do que zero ");
        }
        /**
         * Valida o campo VL_UNIT_LIMITE_BC_ICMS_ULT_E
         */
        if ($this->std->vl_unit_limite_bc_icms_ult_e <= 0 or
            $this->std->vl_unit_limite_bc_icms_ult_e >= $this->std->vl_unit_bc_st or
            $this->std->vl_unit_limite_bc_icms_ult_e >= $this->std->vl_unit_bc_icms_ult_e
        ) {
            throw new \InvalidArgumentException("[" . self::REG . "] " .
                "O campo  VL_UNIT_LIMITE_BC_ICMS_ULT_E deve ser maior que zero e menor que os " .
                "campos VL_UNIT_BC_ST e VL_UNIT_BC_ICMS_ULT_E");
        }

        /**
         * Valida o campo VL_UNIT_ICMS_ULT_E
         */
        $multplicacao = $this->strToFloat('aliq_icms_ult_e') * $this->strToFloat('vl_unit_limite_bc_icms_ult_e');
        if ($this->std->vl_unit_icms_ult_e !=
            number_format($multplicacao, 2, ',', '')
        ) {
            throw new \InvalidArgumentException("[" . self::REG . "] " .
                "O campo  VL_UNIT_ICMS_ULT_E deve ser maior que zero e " .
                "deve corresponder a multiplicação entre os campos " .
                "campos ALIQ_ICMS_ULT_E e VL_UNIT_LIMITE_BC_ICMS_ULT_E");
        }

        /**
         * Valida o campo ALIQ_ST_ULT_E
         */
        if ($this->std->aliq_st_ult_e <= 0) {
            throw new \InvalidArgumentException("[" . self::REG . "] " .
                "O campo  ALIQ_ST_ULT_E deve ser maior que zero");
        }

        /**
         * Valida o campo VL_UNIT_RES
         */
        $calc = (($this->strToFloat('vl_unit_bc_st') * $this->strToFloat('aliq_st_ult_e')) -
            $this->strToFloat('vl_unit_icms_ult_e'));

        if ($this->std->vl_unit_res !==
            number_format($calc, 2, ',', '')) {
            throw new \InvalidArgumentException("[" . self::REG . "] " .
                "o valor informado no campo VL_UNIT_RES deve ser maior ou igual que “0” (zero), e deve corresponder " .
                "a multiplicação entre os campos VL_UNIT_BC_ST e ALIQ_ST_ULT_E, subtraindo, deste resultado," .
                " o campo VL_UNIT_ICMS_ULT_E.");
        }

        if (!$this->std->cod_da and $this->std->cod_resp_ret == 3) {
            throw new \InvalidArgumentException("[" . self::REG . "] " .
                "Quando o campo COD_RESP_RET é igual a '3', o campo COD_DA é obrigatório");
        }

        /**
         * Verifica a chave da NFE
         */
        if ($this->std->chave_nfe_ret and !Keys::isValid($this->std->chave_nfe_ret)) {
            throw new \InvalidArgumentException("[" . self::REG . "] " .
                " Dígito verificador incorreto no campo campo chave da " .
                "nota fiscal eletronica (CHAVE_NFE_RET)");
        }
    }
}
