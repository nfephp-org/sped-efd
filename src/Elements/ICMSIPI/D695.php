<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class D695 extends Element implements ElementInterface
{
    const REG = 'D695';
    const LEVEL = 2;
    const PARENT = '';

    protected $parameters = [
        'COD_MOD' => [
            'type' => 'numeric',
            'regex' => '^(\d{3})$',
            'required' => true,
            'info' => 'Código do modelo do documento fiscal, conforme a Tabela 4.1.1.',
            'format' => ''
        ],
        'SER' => [
            'type' => 'numeric',
            'regex' => '^(\d{3})$',
            'required' => true,
            'info' => 'Série do documento fiscal ',
            'format' => ''
        ],
        'NRO_ORD_INI' => [
            'type' => 'numeric',
            'regex' => '^(\d{3})$',
            'required' => true,
            'info' => 'Número de ordem inicial ',
            'format' => ''
        ],
        'NRO_ORD_FIN' => [
            'type' => 'numeric',
            'regex' => '^(\d{3})$',
            'required' => true,
            'info' => 'Número de ordem final ',
            'format' => ''
        ],
        'DT_DOC_INI' => [
            'type' => 'numeric',
            'regex' => '^(\d{3})$',
            'required' => true,
            'info' => 'Data de emissão inicial dos documentos ',
            'format' => ''
        ],
        'DT_DOC_FIN' => [
            'type' => 'numeric',
            'regex' => '^(\d{3})$',
            'required' => true,
            'info' => 'Data de emissão final dos documentos ',
            'format' => ''
        ],
        'NOM_MEST' => [
            'type' => 'numeric',
            'regex' => '^(\d{3})$',
            'required' => true,
            'info' => 'Nome do arquivo Mestre de Documento Fiscal',
            'format' => ''
        ],
        'CHV_COD_DIG' => [
            'type' => 'numeric',
            'regex' => '^(\d{3})$',
            'required' => true,
            'info' => 'Chave de codificação digital do arquivo Mestre de Documento Fiscal',
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
