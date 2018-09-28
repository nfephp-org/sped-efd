<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class C860 extends Element implements ElementInterface
{
    const REG = 'C860';
    const LEVEL = 4;
    const PARENT = 'C800';

    protected $parameters = [
        'COD_MOD' => [
            'type' => 'string',
            'regex' => '^.{1,2}$',
            'required' => true,
            'info' => 'Código do modelo do documento fiscal, conforme a Tabela',
            'format' => ''
        ],
        'NR_SAT' => [
            'type' => 'numeric',
            'regex' => '^(\d{1,9})$',
            'required' => true,
            'info' => 'Número de Série do equipamento SAT',
            'format' => ''
        ],
        'DT_DOC' => [
            'type' => 'string',
            'regex' => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => true,
            'info' => 'Data de emissão dos documentos fiscais',
            'format' => ''
        ],
        'DOC_INI' => [
            'type' => 'numeric',
            'regex' => '^(\d{1,6})$',
            'required' => true,
            'info' => 'Número do documento inicial',
            'format' => ''
        ],
        'DOC_FIM' => [
            'type' => 'numeric',
            'regex' => '^(\d{1,6})$',
            'required' => true,
            'info' => 'Número do documento final',
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
