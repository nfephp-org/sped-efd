<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use stdClass;

/**
 * Elemento 0100 do Bloco 0
 * REGISTRO 0100: DADOS DO CONTABILISTA
 * Registro utilizado para identificação do contabilista responsável pela
 * escrituração fiscal do estabelecimento, mesmo que o contabilista seja
 * funcionário da empresa ou prestador de serviço.
 *
 * NOTA: usada a letra Z no nome da Classe pois os nomes não podem ser exclusivamente
 * numeréricos e também para não confundir os com elementos do bloco B
 */
class Z0100 extends Element
{
    const REG = '0100';
    const LEVEL = 2;
    const PARENT = '0015|0005';

    protected $parameters = [
        'NOME' => [
            'type'     => 'string',
            'regex'    => '^.{3,100}$',
            'required' => true,
            'info'     => 'Nome do contabilista',
            'format'   => ''
        ],
        'CPF' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{11}$',
            'required' => true,
            'info'     => 'Número de inscrição do contabilista no CPF',
            'format'   => ''
        ],
        'CRC' => [
            'type'     => 'string',
            'regex'    => '^.{8,15}$',
            'required' => true,
            'info'     => 'Número   de   inscrição   do   contabilista   no   Conselho Regional de Contabilidade',
            'format'   => ''
        ],
        'CNPJ' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{14}$',
            'required' => false,
            'info'     => 'Número  de  inscrição  do  escritório  de  contabilidade  no CNPJ, se houver.',
            'format'   => ''
        ],
        'CEP' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{8}$',
            'required' => false,
            'info'     => 'Código de Endereçamento Posta.l',
            'format'   => ''
        ],
        'END' => [
            'type'     => 'string',
            'regex'    => '^.{3,60}$',
            'required' => false,
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
            'regex'    => '^.{1,60}$',
            'required' => false,
            'info'     => 'Dados complementares do endereço.',
            'format'   => ''
        ],
        'BAIRRO' => [
            'type'     => 'string',
            'regex'    => '^.{3,60}$',
            'required' => false,
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
            'required' => true,
            'info'     => 'Endereço do correio eletrônico.',
            'format'   => ''
        ],
        'COD_MUN' => [
            'type'     => 'integer',
            'regex'    => '^[0-9]{7}$',
            'required' => true,
            'info'     => 'Código do município, conforme tabela IBGE.',
            'format'   => ''
        ]
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
