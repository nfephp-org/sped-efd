<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class Z1010 extends Element implements ElementInterface
{
    const REG = '1010';
    const LEVEL = 3;
    const PARENT = '1001';

    protected $parameters = [
        'NUM_PROC' => [
            'type' => 'string',
            'regex' => '^.{0,20}$',
            'required' => false,
            'info' => 'Identificação do Número do Processo Judicial ',
            'format' => ''
        ],
        'ID_SEC_JUD' => [
            'type' => 'string',
            'regex' => '^(.*)$',
            'required' => false,
            'info' => 'Identificação da Seção Judiciária ',
            'format' => ''
        ],
        'ID_VARA' => [
            'type' => 'string',
            'regex' => '^.{0,2}$',
            'required' => false,
            'info' => 'Identificação da Vara ',
            'format' => ''
        ],
        'IND_NAT_ACAO' => [
            'type' => 'string',
            'regex' => '^(01|02|03|04|05|06|07|08|09|99)$',
            'required' => false,
            'info' => 'Indicador da Natureza da Ação Judicial, impetrada na Justiça Federal ' .
                ' 01 – Decisão judicial transitada em julgado, a favor da pessoa jurídica. 02 – ' .
                'Decisão judicial não transitada em julgado, a favor da pessoa jurídica. 03 – Decisão ' .
                'judicial oriunda de liminar em mandado de segurança. 04 – Decisão judicial oriunda de ' .
                'liminar em medida cautelar. 05 – Decisão judicial oriunda de antecipação de tutela. ' .
                '06 - Decisão judicial vinculada a depósito ',
            'format' => ''
        ],
        'DESC_DEC_JUD' => [
            'type' => 'string',
            'regex' => '^.{0,100}$',
            'required' => false,
            'info' => 'Descrição Resumida dos Efeitos Tributários abrangidos pela Decisão Judicial proferida. ',
            'format' => ''
        ],
        'DT_SENT_JUD' => [
            'type' => 'string',
            'regex' => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => false,
            'info' => 'Data da Sentença/Decisão Judicial ',
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
