<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use stdClass;

class D101 extends Element
{
    const REG = 'D101';
    const LEVEL = 4;
    const PARENT = 'D100';

    protected $parameters = [
        'IND_NAT_FRT' => [
            'type' => 'string',
            'regex' => '^(0|1|2|3|4|5|9)$',
            'required' => false,
            'info' => 'Indicador da Natureza do Frete Contratado, referente a ' .
                ' 0 – Operações de vendas, com ônus suportado pelo estabelecimento vendedor ' .
                ' 1 – Operações de vendas, com ônus suportado pelo adquirente ' .
                ' 2 – Operações de compras (bens para revenda, matérias-prima e outros produtos, ' .
                'geradores de crédito) ' .
                ' 3 – Operações de compras (bens para revenda, matérias-prima e outros produtos, não ' .
                'geradores de crédito) ' .
                ' 4 – Transferência de produtos acabados entre ',
            'format' => ''
        ],
        'VL_ITEM' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor total dos itens ',
            'format' => '15v2'
        ],
        'CST_PIS' => [
            'type' => 'string',
            'regex' => '^((5[0-6])|(6[0-6])|(7[0-5])|98|99)$',
            'required' => false,
            'info' => 'Código da Situação Tributária referente ao PIS/PASEP ',
            'format' => ''
        ],
        'NAT_BC_CRED' => [
            'type' => 'string',
            'regex' => '^.{2}$',
            'required' => false,
            'info' => 'Código da Base de Cálculo do Crédito, conforme a Tabela indicada no item 4.3.7. ',
            'format' => ''
        ],
        'VL_BC_PIS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor da base de cálculo do PIS/PASEP ',
            'format' => '15v2'
        ],
        'ALIQ_PIS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Alíquota do PIS/PASEP (em percentual) ',
            'format' => '8v4'
        ],
        'VL_PIS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor do PIS/PASEP ',
            'format' => '15v2'
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
        $multiplicacao = $this->values->vl_bc_pis * $this->values->aliq_pis;
        if (number_format($this->values->vl_pis, 2) != number_format($multiplicacao / 100, 2)) {
            $this->errors[] = "[" . self::REG . "] " .
                "O campo VL_PIS deve de ser o calculo da multiplicacao " .
                "da base de calculo do PIS com a aliquota do PIS, o resultado dividido por 100";
        }
    }
}
