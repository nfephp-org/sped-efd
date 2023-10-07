<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use stdClass;

/**
 * Registro: M215
 * Ajustes da Base de Cálculo da Contribuição para o PIS/Pasep Apurada
 * Este registro será utilizado pela pessoa jurídica para detalhar os totais de ajustes da base de cálculo,
 * informados nos campos 05 e 06 do registro pai M210.
 * A chave do registro é formada pelos campos: IND_AJ_BC; COD_AJ_BC; NUM_DOC; COD_CTA; DT_REF; CNPJ
*  e INFO_COMPL
 */
class M215 extends Element
{
    const REG = 'M215';
    const LEVEL = 4;
    const PARENT = 'M215';

    protected $parameters = [
        'IND_AJ_BC' => [
            'type' => 'string',
            'regex' => '^(1|2)$',
            'required' => true,
            'info' => 'Indicador do tipo de ajuste da base de cálculo: 0 - Ajuste de redução; 1 - Ajuste de acréscimo.',
            'format' => ''
        ],
        'VL_AJ_BC' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Valor do ajuste de base de cálculo',
            'format' => '15v2'
        ],
        'COD_AJ_BC' => [
            'type' => 'string',
            'regex' => '',
            'required' => true,
            'info' => 'Código do ajuste, conforme a Tabela indicada no item 4.3.18',
            'format' => ''
        ],
        'NUM_DOC' => [
            'type' => 'string',
            'regex' => '',
            'required' => false,
            'info' => 'Número do processo, documento ou ato concessório ao qual o ajuste está vinculado, se houver',
            'format' => ''
        ],
        'DESCR_AJ_BC' => [
            'type' => 'string',
            'regex' => '',
            'required' => false,
            'info' => 'Descrição resumida do ajuste na base de cálculo.',
            'format' => ''
        ],
        'DT_REF' => [
            'type' => 'string',
            'regex' => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => false,
            'info' => 'Data de referência do ajuste (ddmmaaaa) ',
            'format' => ''
        ],
        'COD_CTA' => [
            'type' => 'string',
            'regex' => '',
            'required' => false,
            'info' => 'Código da conta analítica contábil debitada/creditada',
            'format' => ''
        ],
        'CNPJ' => [
            'type' => 'string',
            'regex' => '^[0-9]{14}$',
            'required' => true,
            'info' => 'CNPJ do estabelecimento a que se refere o ajuste',
            'format' => ''
        ],
        'INFO_COMPL' => [
            'type' => 'string',
            'regex' => '',
            'required' => false,
            'info' => 'Informação complementar do registro',
            'format' => ''
        ]
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
}
