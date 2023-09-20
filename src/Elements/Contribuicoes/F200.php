<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class F200 extends Element implements ElementInterface
{
    const REG = 'F200';
    const LEVEL = 3;
    const PARENT = 'F010';

    protected $parameters = [
        'IND_OPER' => [
            'type' => 'string',
            'regex' => '^(0[1-5])$',
            'required' => true,
            'info' => 'Indicador do Tipo da Operação:
            01 – Venda a Vista de Unidade Concluída;
            02 – Venda a Prazo de Unidade Concluída;
            03 – Venda a Vista de Unidade em Construção;
            04 – Venda a Prazo de Unidade em Construção;
            05 – Outras.',
            'format' => ''
        ],
        'UNID_IMOB' => [
            'type' => 'string',
            'regex' => '^(0[1-6])$',
            'required' => true,
            'info' => 'Indicador do tipo de unidade imobiliária Vendida:
            01 – Terreno adquirido para venda;
            02 – Terreno decorrente de loteamento;
            03 – Lote oriundo de desmembramento de terreno;
            04 – Unidade resultante de incorporação imobiliária;
            05 – Prédio construído/em construção para venda;
            06 – Outras.',
            'format' => ''
        ],
        'IDENT_EMP' => [
            'type' => 'string',
            'regex' => '^.{0,100}$',
            'required' => true,
            'info' => 'Identificação/Nome do Empreendimento',
            'format' => ''
        ],
        'DESC_UNID_IMOB' => [
            'type' => 'string',
            'regex' => '^.{0,90}$',
            'required' => false,
            'info' => 'Descrição resumida da unidade imobiliária vendida',
            'format' => ''
        ],
        'NUM_CONT' => [
            'type' => 'string',
            'regex' => '^.{0,90}$',
            'required' => false,
            'info' => 'Número do Contrato/Documento que formaliza a
            Venda da Unidade Imobiliária',
            'format' => ''
        ],
        'CPF_CNPJ_ADQU' => [
            'type' => 'string',
            'regex' => '^([0-9]{11}|[0-9]{14})$',
            'required' => true,
            'info' => 'Identificação da pessoa física (CPF) ou da pessoa
            jurídica (CNPJ) adquirente da unidade imobiliária',
            'format' => ''
        ],
        'DT_OPER' => [
            'type' => 'string',
            'regex' => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => true,
            'info' => 'Data da operação de venda da unidade imobiliária',
            'format' => ''
        ],
        'VL_TOT_VEND' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Valor total da unidade imobiliária vendida
            atualizado até o período da escrituração',
            'format' => ''
        ],
        'VL_REC_ACUM' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor recebido acumulado até o mês anterior ao da
            escrituração',
            'format' => ''
        ],
        'VL_TOT_REC' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Valor total recebido no mês da escrituração',
            'format' => ''
        ],
        'CST_PIS' => [
            'type' => 'numeric',
            'regex' => '^(\d{2})$',
            'required' => true,
            'info' => 'Código da Situação Tributária referente ao PIS/PASEP, 
            conforme a Tabela indicada no item 4.3.3.',
            'format' => ''
        ],
        'VL_BC_PIS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor da base de cálculo do PIS/PASEP',
            'format' => '15v2'
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
            'regex' => '^((0[1-9])|49|99)$',
            'required' => true,
            'info' => 'Código da Situação Tributária referente a COFINS, conforme a Tabela indicada no item 4.3.4.',
            'format' => ''
        ],
        'VL_BC_COFINS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Base de Cálculo da COFINS',
            'format' => '15v2'
        ],
        'ALIQ_COFINS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Alíquota do COFINS (em percentual)',
            'format' => '6v2'
        ],
        'VL_COFINS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor da COFINS',
            'format' => '15v2'
        ],
        'PERC_REC_RECEB' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Percentual da receita total recebida até o mês, da
            unidade imobiliária vendida ((Campo 10 + Campo 11) / Campo 09)',
            'format' => ''
        ],
        'IND_NAT_EMP' => [
            'type' => 'string',
            'regex' => '^(1|2|3|4)$',
            'required' => false,
            'info' => 'Indicador da Natureza Específica do Empreendimento:
            1 - Consórcio
            2 - SCP
            3 – Incorporação em Condomínio
            4 - Outras',
            'format' => ''
        ],
        'INF_COMPL' => [
            'type' => 'string',
            'regex' => '^.{0,90}$',
            'required' => false,
            'info' => 'Informações complementares',
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