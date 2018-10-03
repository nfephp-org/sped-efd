<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class C010 extends Element implements ElementInterface
{
    const REG = 'C010';
    const LEVEL = 2;
    const PARENT = 'C001';

    protected $parameters = [
        'CNPJ' => [
            'type' => 'string',
            'regex' => '^[0-9]{14}$',
            'required' => false,
            'info' => 'Número de inscrição do estabelecimento no CNPJ.',
            'format' => ''
        ],
        'IND_ESCRI' => [
            'type' => 'string',
            'regex' => '^.{1}$',
            'required' => false,
            'info' => 'Indicador da apuração das contribuições e créditos, na escrituração das 
            operações por NF-e e ECF, no período: 1 – Apuração com base nos registros de consolidação 
            das operações por NF-e (C180 e C190) e por ECF (C490);',
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
