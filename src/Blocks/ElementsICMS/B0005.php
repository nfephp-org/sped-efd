<?php

namespace NFePHP\EFD\Blocks\ElementsICMS;

use NFePHP\EFD\Blocks\ElementBase;
use NFePHP\EFD\Blocks\ElementInterface;
use \stdClass;

/**
 * Elemento 0005 do Bloco 0
 * REGISTRO 0005: DADOS COMPLEMENTARES DA ENTIDADE
 * Registro obrigatório utilizado para complementar as informações de
 * identificação do informante do arquivo.
 */
class B0005 extends ElementBase implements ElementInterface
{
    const REG = '0005';
    const LEVEL = 2;
    const PARENT = '0001';
    
    protected $parameters = [
        'FANTASIA' => [
            'type'     => 'string',
            'regex'    => '^.{3,60}$',
            'required' => true,
            'info'     => 'Nome de fantasia associado ao nome empresarial.',
            'format'   => ''
        ],
        'CEP' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{8}$',
            'required' => true,
            'info'     => 'Código de Endereçamento Postal.',
            'format'   => ''
        ],
        'END' => [
            'type'     => 'string',
            'regex'    => '^.{3,60}$',
            'required' => true,
            'info'     => 'Logradouro e endereço do imóvel.',
            'format'   => ''
        ],
        'NUM' => [
            'type'     => 'string',
            'regex'    => '^.{1,10}$',
            'required' => false,
            'info'     => 'Número do imóvel.',
            'format'   => ''
        ],
        'COMPL' => [
            'type'     => 'string',
            'regex'    => '^.{3,60}$',
            'required' => false,
            'info'     => 'Dados complementares do endereço.',
            'format'   => ''
        ],
        'BAIRRO' => [
            'type'     => 'string',
            'regex'    => '^.{3,60}$',
            'required' => true,
            'info'     => 'Bairro em que o imóvel está situado.',
            'format'   => ''
        ],
        'FONE' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{8,11}$',
            'required' => false,
            'info'     => 'Número do telefone (DDD+FONE).',
            'format'   => ''
        ],
        'FAX' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{8,11}$',
            'required' => false,
            'info'     => 'Número do fax.',
            'format'   => ''
        ],
        'EMAIL' => [
            'type'     => 'string',
            'regex'    => 'email',
            'required' => false,
            'info'     => 'Endereço do correio eletrônico.',
            'format'   => ''
        ]
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
