<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class Z0200 extends Element implements ElementInterface
{
    const REG = 'Z0200';
    const LEVEL = 3;
    const PARENT = 'Z0000';

    protected $parameters = [
        'COD_ITEM' => [
            'type' => 'string',
            'regex' => '^.{0,60}$',
            'required' => false,
            'info' => 'Código do item',
            'format' => ''
        ],
        'DESCR_ITEM' => [
            'type' => 'string',
            'regex' => '^(.*)$',
            'required' => false,
            'info' => 'Descrição do item',
            'format' => ''
        ],
        'COD_BARRA' => [
            'type' => 'string',
            'regex' => '^(.*)$',
            'required' => false,
            'info' => 'Representação alfanumérico do código de barra do produto, se houver.',
            'format' => ''
        ],
        'COD_ANT_ITEM' => [
            'type' => 'string',
            'regex' => '^.{0,60}$',
            'required' => false,
            'info' => 'Código anterior do item com relação à última informação apresentada.',
            'format' => ''
        ],
        'UNID_INV' => [
            'type' => 'string',
            'regex' => '^.{0,6}$',
            'required' => false,
            'info' => 'Unidade de medida utilizada na quantificação de estoques.',
            'format' => ''
        ],
        'TIPO_ITEM' => [
            'type' => 'numeric',
            'regex' => '^(00|01|02|03|04|05|06|07|08|09|10|99)$',
            'required' => false,
            'info' => 'Tipo do item – Atividades Industriais, Comerciais e Serviços:',
            'format' => ''
        ],
        'COD_NCM' => [
            'type' => 'string',
            'regex' => '^.{0,8}$',
            'required' => false,
            'info' => 'Código da Nomenclatura Comum do Mercosul',
            'format' => ''
        ],
        'EX_IPI' => [
            'type' => 'string',
            'regex' => '^.{0,3}$',
            'required' => false,
            'info' => 'Código EX, conforme a TIPI',
            'format' => ''
        ],
        'COD_GEN' => [
            'type' => 'numeric',
            'regex' => '^(\d{2})$',
            'required' => false,
            'info' => 'Código do gênero do item, conforme a Tabela 4.2.1.',
            'format' => ''
        ],
        'COD_LST' => [
            'type' => 'numeric',
            'regex' => '^(\d{0,4})$',
            'required' => false,
            'info' => 'Código do serviço conforme lista do Anexo I da Lei Complementar Federal nº 116/03.',
            'format' => ''
        ],
        'ALIQ_ICMS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Alíquota de ICMS aplicável ao item nas operações internas',
            'format' => '6v2'
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
