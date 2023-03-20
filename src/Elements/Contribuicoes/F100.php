<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class F100 extends Element implements ElementInterface
{
    const REG = 'F100';
    const LEVEL = 3;
    const PARENT = 'F010';

    protected $parameters = [
        'IND_OPER' => [
            'type' => 'string',
            'regex' => '^(0|1|2)$',
            'required' => true,
            'info' => 'Indicador do Tipo da Operação:
            0 – Operação Representativa de Aquisição, Custos, Despesa ou Encargos, ou Receitas, Sujeita à
                Incidência de Crédito de PIS/Pasep ou Cofins (CST 50 a 66).
            1 – Operação Representativa de Receita Auferida Sujeita ao Pagamento da Contribuição para o PIS/Pasep e
                da Cofins (CST 01, 02, 03 ou 05).
            2 - Operação Representativa de Receita Auferida Não Sujeita ao Pagamento da Contribuição para o PIS/Pasep e
                da Cofins (CST 04, 06, 07, 08, 09, 49 ou 99).',
            'format' => ''
        ],
        'COD_PART' => [
            'type' => 'string',
            'regex' => '^.{0,60}$',
            'required' => false,
            'info' => 'Código do participante (campo 02 do Registro 0150)',
            'format' => ''
        ],
        'COD_ITEM' => [
            'type' => 'string',
            'regex' => '^.{0,60}$',
            'required' => false,
            'info' => 'Código do item (campo 02 do Registro 0200)',
            'format' => ''
        ],
        'DT_OPER' => [
            'type' => 'string',
            'regex' => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => true,
            'info' => 'Data da Operação (ddmmaaaa) ',
            'format' => ''
        ],
        'VL_OPER' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Valor da Operação/Item',
            'format' => '15v2'
        ],
        'CST_PIS' => [
            'type' => 'numeric',
            'regex' => '^(\d{2})$',
            'required' => true,
            'info' => 'Código da Situação Tributária referente ao PIS/PASEP – Tabela 4.3.3.',
            'format' => ''
        ],
        'VL_BC_PIS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor da base de cálculo do PIS/PASEP.',
            'format' => '15v4'
        ],
        'ALIQ_PIS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Alíquota do PIS/PASEP (em percentual)',
            'format' => '8v4'
        ],
        'VL_PIS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor do PIS/PASEP',
            'format' => '15v2'
        ],
        'CST_COFINS' => [
            'type' => 'numeric',
            'regex' => '^(\d{2})$',
            'required' => true,
            'info' => 'Código da Situação Tributária referente ao COFINS – Tabela 4.3.4.',
            'format' => ''
        ],
        'VL_BC_COFINS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor da base de cálculo da COFINS',
            'format' => '15v4'
        ],
        'ALIQ_COFINS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Alíquota do COFINS (em percentual)',
            'format' => '8v4'
        ],
        'VL_COFINS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor da COFINS',
            'format' => '15v2'
        ],
        'NAT_BC_CRED' => [ //15
            'type' => 'string',
            'regex' => '^.{2}$',
            'required' => false,
            'info' => 'Código da base de cálculo do crédito, conforme a Tabela indicada no item 4.3.7,
            caso seja informado código representativo de crédito nos Campos 07 (CST_PIS)
            e 11 (CST_COFINS).',
            'format' => ''
        ],
        'IND_ORIG_CRED' => [
            'type' => 'string',
            'regex' => '^(0|1)$',
            'required' => false,
            'info' => 'Indicador da origem do crédito:
                0 – Operação no Mercado Interno
                1 – Operação de Importação',
            'format' => ''
        ],
        'COD_CTA' => [
            'type' => 'string',
            'regex' => '^.{0,255}$',
            'required' => false,
            'info' => 'Código da conta analítica contábil debitada/creditada',
            'format' => ''
        ],
        'COD_CCUS' => [
            'type' => 'string',
            'regex' => '^.{0,255}$',
            'required' => false,
            'info' => 'Código do centro de custos',
            'format' => ''
        ],
        'DESC_DOC_OPER' => [
            'type' => 'string',
            'regex' => '^(.*)$',
            'required' => false,
            'info' => 'Descrição do Documento/Operação',
            'format' => ''
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
        $multiplicacao = $this->values->vl_bc_cofins * $this->values->aliq_cofins;
        if (number_format($this->values->vl_cofins, 2) != number_format($multiplicacao / 100, 2)) {
            $this->errors[] = "[" . self::REG . "] " .
                "O campo VL_COFINS deve de ser o calculo da multiplicacao " .
                "da base de calculo do cofins com a aliquota do cofins, o resultado dividido por 100";
        }
    }
}
