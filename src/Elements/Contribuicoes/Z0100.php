<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class Z0100 extends Element implements ElementInterface
{
    const REG = '0100';
    const LEVEL = 2;
    const PARENT = '2';

    protected $parameters = [
        'NOME' => [
            'type' => 'string',
            'regex' => '^.{0,100}$',
            'required' => false,
            'info' => 'Nome do contabilista.',
            'format' => ''
        ],
        'CPF' => [
            'type' => 'string',
            'regex' => '^[0-9]{11}$',
            'required' => false,
            'info' => 'Número de inscrição do contabilista no CPF.',
            'format' => ''
        ],
        'CRC' => [
            'type' => 'string',
            'regex' => '^.{0,15}$',
            'required' => false,
            'info' => 'Número de inscrição do contabilista no Conselho Regional de Contabilidade.',
            'format' => ''
        ],
        'CNPJ' => [
            'type' => 'string',
            'regex' => '^[0-9]{14}$',
            'required' => false,
            'info' => 'Número de inscrição do escritório de contabilidade no CNPJ, se houver.',
            'format' => ''
        ],
        'CEP' => [
            'type' => 'numeric',
            'regex' => '^(\d{8})$',
            'required' => false,
            'info' => 'Código de Endereçamento Postal.',
            'format' => ''
        ],
        'END' => [
            'type' => 'string',
            'regex' => '^.{0,60}$',
            'required' => false,
            'info' => 'Logradouro e endereço do imóvel.',
            'format' => ''
        ],
        'NUM' => [
            'type' => 'string',
            'regex' => '^(.*)$',
            'required' => false,
            'info' => 'Número do imóvel.',
            'format' => ''
        ],
        'COMPL' => [
            'type' => 'string',
            'regex' => '^.{0,60}$',
            'required' => false,
            'info' => 'Dados complementares do endereço.',
            'format' => ''
        ],
        'BAIRRO' => [
            'type' => 'string',
            'regex' => '^.{0,60}$',
            'required' => false,
            'info' => 'Bairro em que o imóvel está situado.',
            'format' => ''
        ],
        'FONE' => [
            'type' => 'string',
            'regex' => '^.{0,11}$',
            'required' => false,
            'info' => 'Número do telefone.',
            'format' => ''
        ],
        'FAX' => [
            'type' => 'string',
            'regex' => '^.{0,11}$',
            'required' => false,
            'info' => 'Número do fax.',
            'format' => ''
        ],
        'EMAIL' => [
            'type' => 'string',
            'regex' => '^(.*)$',
            'required' => false,
            'info' => 'Endereço do correio eletrônico.',
            'format' => ''
        ],
        'COD_MUN' => [
            'type' => 'numeric',
            'regex' => '^(\d{7})$',
            'required' => false,
            'info' => 'Código do município, conforme tabela IBGE.',
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
