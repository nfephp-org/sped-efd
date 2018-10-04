<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class P110 extends Element implements ElementInterface
{
    const REG = 'P110';
    const LEVEL = 4;
    const PARENT = 'P100';

    protected $parameters = [
        'NUM_CAMPO' => [
            'type' => 'string',
            'regex' => '^.{2}$',
            'required' => false,
            'info' => 'Informar o número do campo do registro “P100”, objeto de detalhamento neste registro. ',
            'format' => ''
        ],
        'COD_DET' => [
            'type' => 'string',
            'regex' => '^.{8}$',
            'required' => false,
            'info' => 'Código do tipo de detalhamento, conforme Tabela 5.1.2 ',
            'format' => ''
        ],
        'DET_VALOR' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor detalhado referente ao campo 02 deste registro ',
            'format' => '15v2'
        ],
        'INF_COMPL' => [
            'type' => 'string',
            'regex' => '^(.*)$',
            'required' => false,
            'info' => 'Informação complementar do detalhamento. ',
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
