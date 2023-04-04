<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use stdClass;

class I300 extends Element
{
    const REG = 'I300';
    const LEVEL = 3;
    const PARENT = 'I010';

    protected $parameters = [
        'COD_COMP' => [
            'type' => 'string',
            'regex' => '',
            'required' => true,
            'info' => 'Código das Tabelas 7.1.3 (Receitas – Visão Analítica/Referenciada) e/ou '
                . '7.1.4 (Deduções e exclusões – Visão Analítica/Referenciada), objeto de complemento neste registro',
            'format' => ''
        ],
        'DET_VALOR' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor da receita, dedução ou exclusão, objeto de complemento/detalhamento neste registro, '
                . 'conforme código informado no campo 02 (especificados nas tabelas analíticas 7.1.3 e 7.1.4) ou '
                . 'no campo 04 (código da conta contábil)',
            'format' => '15v2'
        ],
        'COD_CTA' => [
            'type' => 'string',
            'regex' => '',
            'required' => true,
            'info' => 'Código da conta contábil referente ao valor informado no campo 03',
            'format' => ''
        ],
        'INFO_COMPL' => [
            'type' => 'string',
            'regex' => '',
            'required' => false,
            'info' => 'Informação Complementar dos dados informados no registro',
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
