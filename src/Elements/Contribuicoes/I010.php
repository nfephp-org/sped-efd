<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use stdClass;

class I010 extends Element
{
    const REG = 'I010';
    const LEVEL = 2;
    const PARENT = 'I001';

    protected $parameters = [
        'CNPJ' => [
            'type' => 'string',
            'regex' => '^[0-9]{14}$',
            'required' => true,
            'info' => 'Número de inscrição da pessoa jurídica no CNPJ',
            'format' => ''
        ],
        'IND_ATIV' => [
            'type' => 'string',
            'regex' => '^(01|02|03|04|05|06)$',
            'required' => false,
            'info' => 'Indicador de operações realizadas no período:'
                    . '01 – Exclusivamente operações de Instituições Financeiras e Assemelhadas'
                    . '02 – Exclusivamente operações de Seguros Privados'
                    . '03 – Exclusivamente operações de Previdência Complementar'
                    . '04 – Exclusivamente operações de Capitalização'
                    . '05 – Exclusivamente operações de Planos de Assistência à Saúde'
                    . '06 – Realizou operações referentes a mais de um dos indicadores acima',
            'format' => ''
        ],
        'INFO_COMPL' => [
            'type' => 'string',
            'regex' => '',
            'required' => false,
            'info' => 'Informação Complementar',
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
