<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

/**
 * REGISTRO C180: INFORMAÇÕES COMPLEMENTARES DAS OPERAÇÕES DE ENTRADA DE MERCADORIAS SUJEITAS À SUBSTITUIÇÃO
 * TRIBUTÁRIA (CÓDIGO 01, 1B, 04 e 55).
 * @package NFePHP\EFD\Elements\ICMSIPI
 */
class C180 extends Element implements ElementInterface
{
    const REG = 'C180';
    const LEVEL = 4;
    const PARENT = 'C170';
    
    protected $parameters = [
        'COD_RESP_RET' => [
            'type'     => 'numeric',
            'regex'    => '',
            'required' => true,
            'info'     => 'Código que indica o responsável pela  retenção do ICMS-ST:'
            . '1-Remetente Direto 2-Remetente Indireto'
            . '3-Próprio declarante',
            'format'   => ''
        ],
        'QUANT_CONV' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Quantidade do item',
            'format'   => '15v6'
        ],
        'UNID' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{0}$',
            'required' => true,
            'info'     => 'Unidade adotada para informar o campo QUANT_CONV.',
            'format'   => ''
        ],
        'VL_UNIT_ICMS_OP_CONV' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor unitário do ICMS operação própria que o informante teria direito ao crédito '
            .'caso a mercadoria estivesse sob o regime comum de tributação, considerando unidade utilizada para '
            .'informar o campo QUANT_CONV.',
            'format'   => '15v6'
        ],
        'VL_UNIT_BC_ICMS_ST_CONV' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor unitário da base de cálculo do imposto pago ou retido anteriormente por substituição,'
            .' considerando a unidade utilizada para informar o campo QUANT_CONV, aplicando-se redução, se houver.',
            'format'   => '15v6'
        ],
        'VL_UNIT_ICMS_ST_CONV' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor unitário do imposto pago ou retido anteriormente por substituição, inclusive FCP se'
            .' devido, considerando a unidade utilizada para informar o campo QUANT_CONV.',
            'format'   => '15v6'
        ],
        'VL_UNIT_FCP_ST_CONV' => [
            'type'     => 'numeric',
            'regex'    => '',
            'required' => true,
            'info'     => 'Valor unitário do FCP_ST agregado ao valor informado no campo VL_UNIT_ICMS_ST_CONV',
            'format'   => ''
        ],
        'COD_DA' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{0}$',
            'required' => true,
            'info'     => 'Código do modelo do documento de arrecadação:'
            . '0 - Documento estadual de arrecadação'
            . '1 - GNRE',
            'format'   => ''
        ],
        'NUM_DA' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{0}$',
            'required' => true,
            'info'     => 'Número do documento de arrecadação estadual, se houver',
            'format'   => ''
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
    }
}
