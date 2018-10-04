<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;

class D105 extends Element implements ElementInterface
{
    const REG = 'D105';
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
                ' 2 – Operações de compras (bens para revenda, matérias- prima e outros produtos, ' .
                'geradores de crédito) ' .
                ' 3 – Operações de compras (bens para revenda, matérias- prima e outros produtos, não ' .
                'geradores de crédito) ' .
                ' 4 – Transferência de produtos acabados entre estabelecimentos da pessoa jurídica 5 ' .
                '– Transferência de produtos em elaboração entre estabelecimentos da pessoa jurídica ' .
                '9 – Outras. ',
            'format' => ''
        ],
        'VL_ITEM' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor total dos itens ',
            'format' => '15v2'
        ],
        'CST_COFINS' => [
            'type' => 'string',
            'regex' => '^((5[0-6])|(6[0-6])|(7[0-5])|98|99)$',
            'required' => false,
            'info' => 'Código da Situação Tributária referente a COFINS ',
            'format' => ''
        ],
        'NAT_BC_CRED' => [
            'type' => 'string',
            'regex' => '^.{2}$',
            'required' => false,
            'info' => 'Código da base de Cálculo do Crédito, conforme a Tabela indicada no item 4.3.7 ',
            'format' => ''
        ],
        'VL_BC_COFINS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor da base de cálculo da COFINS ',
            'format' => '15v2'
        ],
        'ALIQ_COFINS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Alíquota da COFINS (em percentual) ',
            'format' => '8v4'
        ],
        'VL_COFINS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor da COFINS ',
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
            throw new \InvalidArgumentException("[" . self::REG . "] " .
                "O campo VL_COFINS deve de ser o calculo da multiplicacao " .
                "da base de calculo do cofins com a aliquota do cofins, o resultado dividido por 100");
        }
    }
}
