<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class Z1110 extends Element implements ElementInterface
{
    const REG = '1110';
    const LEVEL = 4;
    const PARENT = '1105';

    protected $parameters = [
        'COD_PART' => [
            'type'     => 'string',
            'regex'    => '^.{1,60}$',
            'required' => true,
            'info'     => 'Código do participante-Fornecedor da Mercadoria destinada '
            .'à exportação (campo 02 do Registro 0150)',
            'format'   => ''
        ],
        'COD_MOD' => [
            'type'     => 'string',
            'regex'    => '^[0][1|4]|[1][B]|[5][5]$',
            'required' => true,
            'info'     => 'Código do documento fiscal, conforme a Tabela 4.1.1',
            'format'   => ''
        ],
        'SER' => [
            'type'     => 'string',
            'regex'    => '^.{1,4}$',
            'required' => false,
            'info'     => 'Série do documento fiscal recebido com fins específicos de exportação.',
            'format'   => ''
        ],
        'NUM_DOC' => [
            'type'     => 'integer',
            'regex'    => '^[1-9]\d{0,8}$',
            'required' => true,
            'info'     => 'Número do documento fiscal recebido com fins específicos de exportação.',
            'format'   => ''
        ],
        'DT_DOC' => [
            'type'     => 'integer',
            'regex'    => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => true,
            'info'     => 'Data da emissão do documento fiscal recebido com fins específicos de exportação',
            'format'   => ''
        ],
        'CHV_NFE' => [
            'type'     => 'numeric',
            'regex'    => '^([0-9]{44})?$',
            'required' => false,
            'info'     => 'Chave da Nota Fiscal Eletrônica',
            'format'   => ''
        ],
        'NR_MEMO' => [
            'type'     => 'integer',
            'regex'    => '^\d+$',
            'required' => false,
            'info'     => 'Número do Memorando de Exportação',
            'format'   => ''
        ],
        'QTD' => [
            'type'     => 'integer',
            'regex'    => '^[1-9](\d?)+$',
            'required' => true,
            'info'     => 'Quantidade do item efetivamente exportado.',
            'format'   => ''
        ],
        'UNID' => [
            'type'     => 'string',
            'regex'    => '^.{1,6}$',
            'required' => true,
            'info'     => 'Unidade do item (Campo 02 do registro 0190)',
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
