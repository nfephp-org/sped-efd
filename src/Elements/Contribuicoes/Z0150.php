<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use stdClass;

class Z0150 extends Element
{
    const REG = '0150';
    const LEVEL = 3;
    const PARENT = '0100';

    protected $parameters = [
        'COD_PART' => [
            'type' => 'string',
            'regex' => '^.{0,60}$',
            'required' => false,
            'info' => 'Código de identificação do participante no arquivo.',
            'format' => ''
        ],
        'NOME' => [
            'type' => 'string',
            'regex' => '^.{0,100}$',
            'required' => false,
            'info' => 'Nome pessoal ou empresarial do participante.',
            'format' => ''
        ],
        'COD_PAIS' => [
            'type' => 'numeric',
            'regex' => '^(\d{0,5})$',
            'required' => false,
            'info' => 'Código do país do participante, conforme a tabela indicada no item 3.2.1.',
            'format' => ''
        ],
        'CNPJ' => [
            'type' => 'string',
            'regex' => '^[0-9]{14}$',
            'required' => false,
            'info' => 'CNPJ do participante.',
            'format' => ''
        ],
        'CPF' => [
            'type' => 'string',
            'regex' => '^[0-9]{11}$',
            'required' => false,
            'info' => 'CPF do participante.',
            'format' => ''
        ],
        'IE' => [
            'type' => 'string',
            'regex' => '^[0-9]{2,14}$',
            'required' => false,
            'info' => 'Inscrição Estadual do participante.',
            'format' => ''
        ],
        'COD_MUN' => [
            'type' => 'numeric',
            'regex' => '^(\d{7})$',
            'required' => false,
            'info' => 'Código do município, conforme a tabela IBGE',
            'format' => ''
        ],
        'SUFRAMA' => [
            'type' => 'string',
            'regex' => '^.{9}$',
            'required' => false,
            'info' => 'Número de inscrição do participante na Suframa',
            'format' => ''
        ],
        'END' => [
            'type' => 'string',
            'regex' => '^.{0,60}$',
            'required' => false,
            'info' => 'Logradouro e endereço do imóvel',
            'format' => ''
        ],
        'NUM' => [
            'type' => 'string',
            'regex' => '^(.*)$',
            'required' => false,
            'info' => 'Número do imóvel',
            'format' => ''
        ],
        'COMPL' => [
            'type' => 'string',
            'regex' => '^.{0,60}$',
            'required' => false,
            'info' => 'Dados complementares do endereço',
            'format' => ''
        ],
        'BAIRRO' => [
            'type' => 'string',
            'regex' => '^.{0,60}$',
            'required' => false,
            'info' => 'Bairro em que o imóvel está situado',
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
