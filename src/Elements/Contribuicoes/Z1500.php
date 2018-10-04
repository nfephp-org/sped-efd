<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class Z1500 extends Element implements ElementInterface
{
    const REG = '1500';
    const LEVEL = 2;
    const PARENT = '1001';

    protected $parameters = [
        'PER_APU_CRED' => [
            'type' => 'numeric',
            'regex' => '^(\d{0,6})$',
            'required' => false,
            'info' => 'Período de Apuração do Crédito (MM/AAAA) ',
            'format' => ''
        ],
        'ORIG_CRED' => [
            'type' => 'numeric',
            'regex' => '^(01|02)$',
            'required' => false,
            'info' => 'Indicador da origem do crédito ' .
                ' 01 – Crédito decorrente de operações próprias ' .
                ' 02 – Crédito transferido por pessoa jurídica sucedida. ',
            'format' => ''
        ],
        'CNPJ_SUC' => [
            'type' => 'string',
            'regex' => '^[0-9]{14}$',
            'required' => false,
            'info' => 'CNPJ da pessoa jurídica cedente do crédito (se ORIG_CRED = 02). ',
            'format' => ''
        ],
        'COD_CRED' => [
            'type' => 'numeric',
            'regex' => '^(\d{3})$',
            'required' => false,
            'info' => 'Código do Tipo do Crédito, conforme Tabela 4.3.6. ',
            'format' => ''
        ],
        'VL_CRED_APU' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor Total do crédito apurado na Escrituração Fiscal Digital (Registro M500) ou em ' .
                'demonstrativo DACON (Fichas 16A e 16B) de período anterior. ',
            'format' => '15v2'
        ],
        'VL_CRED_EXT_APU' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor de Crédito Extemporâneo Apurado (Registro 1501), referente a Período Anterior, ' .
                'Informado no Campo 02 – PER_APU_CRED ',
            'format' => '15v2'
        ],
        'VL_TOT_CRED_APU' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor Total do Crédito Apurado (06 + 07) ',
            'format' => '15v2'
        ],
        'VL_CRED_DESC_PA_ANT' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor do Crédito utilizado mediante Desconto, em Período(s) Anterior(es) ',
            'format' => '15v2'
        ],
        'VL_CRED_PER_PA_ANT' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor do Crédito utilizado mediante Pedido de Ressarcimento, em Período(s) Anterior(es). ',
            'format' => '15v2'
        ],
        'VL_CRED_DCOMP_PA_ANT' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor do Crédito utilizado mediante Declaração de Compensação Intermediária ' .
                '(Crédito de Exportação), em Período(s) Anterior(es) ',
            'format' => '15v2'
        ],
        'SD_CRED_DISP_EFD' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Saldo do Crédito Disponível para Utilização neste Período de Escrituração ' .
                '(08-09-10-11) ',
            'format' => '15v2'
        ],
        'VL_CRED_DESC_EFD' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor do Crédito descontado neste período de escrituração ',
            'format' => '15v2'
        ],
        'VL_CRED_PER_EFD' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor do Crédito objeto de Pedido de Ressarcimento (PER) neste período de escrituração ',
            'format' => '15v2'
        ],
        'VL_CRED_DCOMP_EFD' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor do Crédito utilizado mediante Declaração de Compensação Intermediária neste ' .
                'período de escrituração ',
            'format' => '15v2'
        ],
        'VL_CRED_TRANS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor do crédito transferido em evento de cisão, fusão ou incorporação ',
            'format' => '15v2'
        ],
        'VL_CRED_OUT' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor do crédito utilizado por outras formas ',
            'format' => '15v2'
        ],
        'SLD_CRED_FIM' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Saldo de créditos a utilizar em período de apuração futuro (12-13-14-15-16-17). ',
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

    public function postValidation()
    {
        if ($this->std->vl_cred_per_efd and
            !in_array($this->std->cod_cred, [201, 202, 203, 204, 208, 301, 302, 303, 304, 307,308])) {
            throw new \InvalidArgumentException("[" . self::REG . "] " .
                "O valor do campo VL_CRED_PER_EFD deverá ser informado apenas se o campo 
                COD_CRED for igual a 201, 202, 203, 204, 208, 301, 302, 303, 304, 307 ou 308");
        }
    }
}
