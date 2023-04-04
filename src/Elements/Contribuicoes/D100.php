<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\Common\Keys;
use NFePHP\EFD\Common\Element;
use stdClass;

class D100 extends Element
{
    const REG = 'D100';
    const LEVEL = 3;
    const PARENT = 'D001';

    protected $parameters = [
        'IND_OPER' => [
            'type' => 'string',
            'regex' => '^(0)$',
            'required' => false,
            'info' => 'Indicador do tipo de operação ' .
                ' 0- Aquisição ',
            'format' => ''
        ],
        'IND_EMIT' => [
            'type' => 'string',
            'regex' => '^(0|1)$',
            'required' => false,
            'info' => 'Indicador do emitente do documento fiscal ' .
                ' 0- Emissão Própria ' .
                ' 1- Emissão por Terceiros ',
            'format' => ''
        ],
        'COD_PART' => [
            'type' => 'string',
            'regex' => '^.{0,60}$',
            'required' => false,
            'info' => 'Código do participante (campo 02 do Registro 0150). ',
            'format' => ''
        ],
        'COD_MOD' => [
            'type' => 'string',
            'regex' => '^(07|08|8B|09|10|11|26|27|57|63|67)$',
            'required' => false,
            'info' => 'Código do modelo do documento fiscal, conforme a Tabela 4.1.1 ',
            'format' => ''
        ],
        'COD_SIT' => [
            'type' => 'numeric',
            'regex' => '^(00|01|02|03|06|07|08)$',
            'required' => false,
            'info' => 'Código da situação do documento fiscal, conforme a Tabela 4.1.2 ',
            'format' => ''
        ],
        'SER' => [
            'type' => 'string',
            'regex' => '^.{0,4}$',
            'required' => false,
            'info' => 'Série do documento fiscal ',
            'format' => ''
        ],
        'SUB' => [
            'type' => 'string',
            'regex' => '^.{0,3}$',
            'required' => false,
            'info' => 'Subsérie do documento fiscal ',
            'format' => ''
        ],
        'NUM_DOC' => [
            'type' => 'numeric',
            'regex' => '^(\d{0,9})$',
            'required' => false,
            'info' => 'Número do documento fiscal ',
            'format' => ''
        ],
        'CHV_CTE' => [
            'type' => 'numeric',
            'regex' => '^([0-9]{44})?$',
            'required' => false,
            'info' => 'Chave do Conhecimento de Transporte Eletrônico ',
            'format' => ''
        ],
        'DT_DOC' => [
            'type' => 'string',
            'regex' => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => false,
            'info' => 'Data de referência/emissão dos documentos fiscais ',
            'format' => ''
        ],
        'DT_A_P' => [
            'type' => 'string',
            'regex' => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => false,
            'info' => 'Data da aquisição ou da prestação do serviço ',
            'format' => ''
        ],
        'TP_CTE' => [
            'type' => 'numeric',
            'regex' => '^(\d{1})$',
            'required' => false,
            'info' => 'Tipo de Conhecimento de Transporte Eletrônico conforme definido no Manual de Integração ' .
                'do CT-e ',
            'format' => ''
        ],
        'CHV_CTE_REF' => [
            'type' => 'numeric',
            'regex' => '^([0-9]{44})?$',
            'required' => false,
            'info' => 'Chave do CT-e de referência cujos valores foram complementados (opção “1” do campo ' .
                'anterior) ou cujo débito foi anulado (opção “2” do campo anterior). ',
            'format' => ''
        ],
        'VL_DOC' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor total do documento fiscal ',
            'format' => '15v2'
        ],
        'VL_DESC' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor total do desconto ',
            'format' => '15v2'
        ],
        'IND_FRT' => [
            'type' => 'string',
            'regex' => '^(0|1|2|9)$',
            'required' => false,
            'info' => 'Indicador do tipo do frete ' .
                ' 0- Por conta de terceiros ' .
                ' 1- Por conta do emitente ' .
                ' 2- Por conta do destinatário ' .
                ' 9- Sem cobrança de frete. ',
            'format' => ''
        ],
        'VL_SERV' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor total da prestação de serviço ',
            'format' => '15v2'
        ],
        'VL_BC_ICMS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor da base de cálculo do ICMS ',
            'format' => '15v2'
        ],
        'VL_ICMS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor do ICMS ',
            'format' => '15v2'
        ],
        'VL_NT' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor não-tributado do ICMS ',
            'format' => '15v2'
        ],
        'COD_INF' => [
            'type' => 'string',
            'regex' => '^.{0,6}$',
            'required' => false,
            'info' => 'Código da informação complementar do documento fiscal (campo 02 do Registro 0450) ',
            'format' => ''
        ],
        'COD_CTA' => [
            'type' => 'string',
            'regex' => '^.{0,255}$',
            'required' => false,
            'info' => 'Código da conta analítica contábil debitada/creditada ',
            'format' => ''
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
        if (!empty($this->std->chv_cte) and !Keys::isValid($this->std->chv_cte)) {
            $this->errors[] = "[" . self::REG . "] " .
                " Dígito verificador incorreto no campo chave do " .
                " campo CHV_CTE";
        }

        if (!empty($this->std->chv_cte_ref) and !Keys::isValid($this->std->chv_cte_ref)) {
            $this->errors[] = "[" . self::REG . "] " .
                " Dígito verificador incorreto no campo chave do " .
                " campo CHV_CTE_REF";
        }
    }
}
