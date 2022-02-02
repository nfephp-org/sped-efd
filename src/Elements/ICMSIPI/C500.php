<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class C500 extends Element implements ElementInterface
{
    const REG = 'C500';
    const LEVEL = 2;
    const PARENT = 'C001';

    protected $parameters = [
        'IND_OPER' => [
            'type' => 'string',
            'regex' => '^.{1}$',
            'required' => true,
            'info' => 'Indicador do tipo de operação',
            'format' => ''
        ],
        'IND_EMIT' => [
            'type' => 'string',
            'regex' => '^.{1}$',
            'required' => true,
            'info' => 'Indicador do emitente do documento fiscal',
            'format' => ''
        ],
        'COD_PART' => [
            'type' => 'string',
            'regex' => '^.{1,60}$',
            'required' => true,
            'info' => 'Código do participante (campo 02 do Registro 0150)',
            'format' => ''
        ],
        'COD_MOD' => [
            'type' => 'string',
            'regex' => '^.{2}$',
            'required' => true,
            'info' => 'Código do modelo conforme a Tabela 4.1.1',
            'format' => ''
        ],
        'COD_SIT' => [
            'type' => 'numeric',
            'regex' => '^(\d{2})$',
            'required' => true,
            'info' => 'Código da situação conforme a Tabela 4.1.2',
            'format' => ''
        ],
        'SER' => [
            'type' => 'string',
            'regex' => '^.{0,4}$',
            'required' => false,
            'info' => 'Série do documento fiscal',
            'format' => ''
        ],
        'SUB' => [
            'type' => 'numeric',
            'regex' => '^(\d{1,3})$',
            'required' => false,
            'info' => 'Subsérie do documento fiscal',
            'format' => ''
        ],
        'COD_CONS' => [
            'type' => 'string',
            'regex' => '^[0-9]{2}$',
            'required' => false,
            'info' => 'Código de classe de consumo de energia elétrica ou gás',
            'format' => ''
        ],
        'NUM_DOC' => [
            'type' => 'numeric',
            'regex' => '^(\d{1,9})$',
            'required' => true,
            'info' => 'Número do documento fiscal',
            'format' => ''
        ],
        'DT_DOC' => [
            'type' => 'string',
            'regex' => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => true,
            'info' => 'Data da emissão do documento fiscal',
            'format' => ''
        ],
        'DT_E_S' => [
            'type' => 'string',
            'regex' => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => true,
            'info' => 'Data da entrada ou da saída',
            'format' => ''
        ],
        'VL_DOC' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Valor total do documento fiscal',
            'format' => '15v2'
        ],
        'VL_DESC' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor total do desconto',
            'format' => '15v2'
        ],
        'VL_FORN' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Valor total fornecido/consumido',
            'format' => '15v2'
        ],
        'VL_SERV_NT' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor total dos serviços não-tributados pelo ICMS',
            'format' => '15v2'
        ],
        'VL_TERC' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor total cobrado em nome de terceiros',
            'format' => '15v2'
        ],
        'VL_DA' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor total de despesas acessórias indicadas no',
            'format' => '15v2'
        ],
        'VL_BC_ICMS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor acumulado da base de cálculo do ICMS',
            'format' => '15v2'
        ],
        'VL_ICMS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor acumulado do ICMS',
            'format' => '15v2'
        ],
        'VL_BC_ICMS_ST' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor acumulado da base de cálculo do ICMS substituição tributária',
            'format' => '15v2'
        ],
        'VL_ICMS_ST' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor acumulado substituição tributária',
            'format' => '15v2'
        ],
        'COD_INF' => [
            'type' => 'string',
            'regex' => '^.{0,6}$',
            'required' => false,
            'info' => 'Código da informação complementar do documento fiscal (campo 02 do Registro 0450)',
            'format' => ''
        ],
        'VL_PIS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor do PIS',
            'format' => '15v2'
        ],
        'VL_COFINS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor da COFINS',
            'format' => '15v2'
        ],
        'TP_LIGACAO' => [
            'type' => 'numeric',
            'regex' => '^([1-3]{1})$',
            'required' => false,
            'info' => 'Código de tipo de Ligação',
            'format' => ''
        ],
        'COD_GRUPO_TENSAO' => [
            'type' => 'string',
            'regex' => '^([0-1]{1})([0-9]{1})$',
            'required' => false,
            'info' => 'Código de grupo de tensão',
            'format' => ''
        ],
        'CHV_DOCe' => [
            'type' => 'numeric',
            'regex' => '^[0-9]{44}$',
            'required' => false,
            'info'     => 'Chave da Nota Fiscal de Energia Elétrica Eletrônica',
            'format'   => ''
        ],
        'FIN_DOCe' => [
            'type' => 'string',
            'regex' => '^(0|1|3)$',
            'required' => false,
            'info'     => 'Finalidade da emissão do documento eletrônico:'
            . '1 - Normal'
            . '2 - Substituição'
            . '3 - Normal com ajuste',
            'format'   => ''
        ],
        'CHV_DOCe_REF' => [
            'type' => 'numeric',
            'regex' => '^[0-9]{44}$',
            'required' => false,
            'info'     => 'Chave da nota referenciada, substituída.',
            'format'   => ''
        ],
        'IND_DEST' => [
            'type'     => 'numeric',
            'regex' => '^(0|1|9)$',
            'required' => false,
            'info'     => 'Indicador do Destinatário/Acessante:'
            . '1 - Contribuinte do ICMS;'
            . '2 - Contribuinte Isento de Inscrição no Cadastro de Contribuintes do ICMS;'
            . '9 - Não Contribuinte.',
            'format'   => ''
        ],
        'COD_MUN_DEST' => [
            'type'     => 'numeric',
            'regex' => '^[0-9]{7}$',
            'required' => false,
            'info'     => 'Código do município do destinatário conforme a tabela do IBGE.',
            'format'   => ''
        ],
        'COD_CTA' => [
            'type'     => 'string',
            'regex'    => '^.{1,60}$',
            'required' => false,
            'info'     => 'Código da conta analítica contábil debitada/creditada',
            'format'   => ''
        ],
        'COD_MOD_DOC_REF' => [
            'type' => 'string',
            'regex' => '^.{2}$',
            'required' => false,
            'info' => 'Código do modelo do documento fiscal'
            . 'referenciado, conforme a Tabela 4.1.1',
            'format' => ''
        ],
        'HASH_DOC_REF' => [
            'type' => 'string',
            'regex' => '^(\d{32})$',
            'required' => false,
            'info' => 'Código de autenticação digital do registro (Convênio 115/2003).',
            'format' => ''
        ],
        'SER_DOC_REF' => [
            'type' => 'string',
            'regex' => '^.{0,4}$',
            'required' => false,
            'info' => 'Série do documento fiscal referenciado',
            'format' => ''
        ],
        'NUM_DOC_REF' => [
            'type' => 'numeric',
            'regex' => '^(\d{1,9})$',
            'required' => true,
            'info' => 'Número do documento fiscal referenciado',
            'format' => ''
        ],
        'MES_DOC_REF' => [
            'type' => 'string',
            'regex' => '^(\d{6})$',
            'required' => false,
            'info' => 'Mês e ano da emissão do documento fiscal referenciado',
            'format' => ''
        ],
        'ENER_INJET' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Energia injetada',
            'format' => '15v2'
        ],
        'OUTRAS_DED' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Outras deduções',
            'format' => '15v2'
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

    public function postValidation()
    {
        if ($this->values->vl_doc <= 0) {
            throw new \InvalidArgumentException("[" . self::REG . "] " .
                " O do campo VL_DOC deve ser maior do que 0");
        }
        if ($this->values->vl_forn <= 0) {
            throw new \InvalidArgumentException("[" . self::REG . "] " .
                " O do campo VL_FORN deve ser maior do que 0");
        }
    }
}
