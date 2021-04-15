<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class M105 extends Element implements ElementInterface
{
    const REG = 'M105';
    const LEVEL = 3;
    const PARENT = 'M100';

    protected $parameters = [
        'NAT_BC_CRED' => [
            'type' => 'string',
            'regex' => '^.{2}$',
            'required' => false,
            'info' => 'Código da Base de Cálculo do Crédito apurado no período, conforme a Tabela 4.3.7. ',
            'format' => ''
        ],
        'CST_PIS' => [
            'type' => 'string',
            'regex' => '^((5[0-6])|(6[0-6])|(7[0-5])|98|99)$',
            'required' => false,
            'info' => 'Código da Situação Tributária referente ao crédito de PIS/Pasep (Tabela 4.3.3) ' .
                'vinculado ao tipo de crédito escriturado em M100. ',
            'format' => ''
        ],
        'VL_BC_PIS_TOT' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor Total da Base de Cálculo escriturada nos documentos e operações (Blocos “A”, ' .
                '“C”, “D” e “F”), referente ao CST_PIS informado no Campo 03. ',
            'format' => '15v2'
        ],
        'VL_BC_PIS_CUM' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Parcela do Valor Total da Base de Cálculo informada no Campo 04, vinculada a receitas com ' .
                '0110) ' .
                'ao regime cumulativo e não- cumulativo da contribuição (COD_INC_TRIB = 3 do Registro ' .
                'incidência cumulativa. Campo de preenchimento específico para a pessoa jurídica sujeita ',
            'format' => '15v2'
        ],
        'VL_BC_PIS_NC' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor Total da Base de Cálculo do Crédito, vinculada a receitas com incidência ' .
                'não-cumulativa (Campo 04 – Campo 05). ',
            'format' => '15v2'
        ],
        'VL_BC_PIS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor da Base de Cálculo do Crédito, vinculada ao tipo de Crédito escriturado em M100. ' .
                '- Para os CST_PIS = “50”, “51”, “52”, “60”, “61” e “62” ' .
                ' Informar o valor do Campo 06 (VL_BC_PIS_NC) ' .
                ' - Para os CST_PIS = “53”, “54”, “55”, “56”, “63”, “64” “65” e ' .
                '“66” (Crédito sobre operações vinculadas a mais de um tipo de receita) ' .
                ' Informar a parcela do valor do Campo 06 (VL_BC_PIS_NC) vinculada especificamente ao tipo ' .
                'de crédito escriturado em M100. O valor deste campo será transportado para o Campo 04 ' .
                '(VL_BC_PIS) do registro M100. ',
            'format' => '15v2'
        ],
        'QUANT_BC_PIS_TOT' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Quantidade Total da Base de Cálculo do Crédito apurado em Unidade de Medida de Produto, ' .
                'referente ao CST_PIS informado no Campo 03 ' .
                'escriturada nos documentos e operações (Blocos “A”, “C”, “D” e “F”), ',
            'format' => '15v3'
        ],
        'QUANT_BC_PIS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Parcela da base de cálculo do crédito em quantidade (campo 08) vinculada ao tipo de ' .
                'crédito escriturado em M100. - Para os CST_PIS = “50”, “51” e “52” ' .
                ' Informar o valor do Campo 08 (QUANT_BC_PIS) ' .
                ' - Para os CST_PIS = “53”, “54”, “55” e “56” (crédito vinculado a mais de ' .
                'um tipo de receita) ' .
                ' Informar a parcela do valor do Campo 08 (QUANT_BC_PIS) vinculada ao tipo de crédito ' .
                'escriturado em M100. ',
            'format' => '15v3'
        ],
        'DESC_CRED' => [
            'type' => 'string',
            'regex' => '^.{0,60}$',
            'required' => false,
            'info' => 'Descrição do crédito ',
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
    }
}
