<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class D180 extends Element implements ElementInterface
{
    const REG = 'D180';
    const LEVEL = 3;
    const PARENT = '';

    protected $parameters = [
        'NUM_SEQ' => [
            'type'     => 'numeric',
            'regex'    => '',
            'required' => true,
            'info'     => 'Número de ordem sequencial do modal',
            'format'   => ''
        ],
        'IND_EMIT' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{0}$',
            'required' => true,
            'info'     => 'Indicador do emitente do documento fiscal: 0 - Emissão própria'
            . '1 - Terceiros',
            'format'   => ''
        ],
        'CNPJ_CPF_EMIT' => [
            'type'     => 'numeric',
            'regex'    => '^[0-9]{14}$',
            'required' => true,
            'info'     => 'CNPJ ou CPF do participante emitente do modal',
            'format'   => ''
        ],
        'UF_EMIT' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{2}$',
            'required' => true,
            'info'     => 'Sigla da unidade da federação do participante emitente do modal',
            'format'   => ''
        ],
        'IE_EMIT' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{14}$',
            'required' => true,
            'info'     => 'Inscrição Estadual do participante emitente do modal',
            'format'   => ''
        ],
        'COD_MUN_ORIG' => [
            'type'     => 'numeric',
            'regex'    => '',
            'required' => true,
            'info'     => 'Código do município de origem do serviço, conforme a tabela IBGE',
            'format'   => ''
        ],
        'CNPJ_CPF_TOM' => [
            'type'     => 'numeric',
            'regex'    => '^[0-9]{14}$',
            'required' => true,
            'info'     => 'CNPJ/CPF do participante tomador do serviço',
            'format'   => ''
        ],
        'UF_TOM' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{2}$',
            'required' => true,
            'info'     => 'Sigla da unidade da federação do participante tomador do serviço',
            'format'   => ''
        ],
        'IE_TOM' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{14}$',
            'required' => true,
            'info'     => 'Inscrição Estadual do participante tomador do serviço',
            'format'   => ''
        ],
        'COD_MUN_DEST' => [
            'type'     => 'numeric',
            'regex' => '^[0-9]{7}$',
            'required' => true,
            'info'     => 'Código do município de destino, conforme a tabela IBGE(Preencher com 9999999, se Exterior)',
            'format'   => ''
        ],
        'COD_MOD' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{2}$',
            'required' => true,
            'info'     => 'Código do modelo do documento fiscal, conforme a tabela 4.1.1',
            'format'   => ''
        ],
        'SER' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{4}$',
            'required' => true,
            'info'     => 'Série do documento fiscal',
            'format'   => ''
        ],
        'SUB' => [
            'type'     => 'numeric',
            'regex'    => '^[0-9]{3}$',
            'required' => true,
            'info'     => 'Subsérie do documento fiscal',
            'format'   => ''
        ],
        'NUM_DOC' => [
            'type'     => 'numeric',
            'regex'    => '^[0-9]{9}$',
            'required' => true,
            'info'     => 'Número do documento fiscal',
            'format'   => ''
        ],
        'DT_DOC' => [
            'type'     => 'numeric',
            'regex'    => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => true,
            'info'     => 'Data da emissão do documento fiscal',
            'format'   => ''
        ],
        'VL_DOC' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total do documento fiscal',
            'format'   => '15v2'
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
