<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use stdClass;

class Z1020 extends Element
{
    const REG = '1020';
    const LEVEL = 2;
    const PARENT = '0001';

    protected $parameters = [
        'NUM_PROC' => [
            'type' => 'string',
            'regex' => '^.{0,20}$',
            'required' => false,
            'info' => 'Identificação do Processo Administrativo ou da Decisão Administrativa ',
            'format' => ''
        ],
        'IND_NAT_ACAO' => [
            'type' => 'string',
            'regex' => '^(01|02|03|04|05|06|99)$',
            'required' => false,
            'info' => 'Indicador da Natureza da Ação, decorrente de Processo Administrativo na Secretaria da ' .
                'Receita Federal do Brasil ' .
                ' 01 – Processo Administrativo de Consulta 02 – Despacho Decisório 03 – Ato ' .
                'Declaratório Executivo 04 – Ato Declaratório Interpretativo 05 – Decisão ' .
                'Administrativa de DRJ ou do CARF 06 – Auto de Infração 99 – Outros ',
            'format' => ''
        ],
        'DT_DEC_ADM' => [
            'type' => 'string',
            'regex' => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => false,
            'info' => 'Data do Despacho/Decisão Administrativa ',
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
}
