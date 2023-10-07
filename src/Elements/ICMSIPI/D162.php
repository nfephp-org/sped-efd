<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use stdClass;

class D162 extends Element
{
    const REG = 'D162';
    const LEVEL = 4;
    const PARENT = '';

    protected $parameters = [
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
        'NUM_DOC' => [
            'type'     => 'numeric',
            'regex'    => '^[0-9]{9}$',
            'required' => true,
            'info'     => 'Número do documento fiscal',
            'format'   => ''
        ],
        'DT_DOC' => [
            'type'     => 'numeric',
            'regex'    => '',
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
        ],
        'VL_MERC' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor das mercadorias constantes no documento fiscal',
            'format'   => '15v2'
        ],
        'QTD_VOL' => [
            'type'     => 'numeric',
            'regex'    => '',
            'required' => true,
            'info'     => 'Quantidade de volumes transportados',
            'format'   => ''
        ],
        'PESO_BRT' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Peso bruto dos volumes transportados (em kg)',
            'format'   => '15v2'
        ],
        'PESO_LIQ' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Peso líquido dos volumes transportados (em kg)',
            'format'   => '15v2'
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
