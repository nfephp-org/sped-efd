<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class D161 extends Element implements ElementInterface
{
    const REG = 'D161';
    const LEVEL = 4;
    const PARENT = '';

    protected $parameters = [
        'IND_CARGA' => [
            'type'     => 'numeric',
            'regex'    => '',
            'required' => true,
            'info'     => 'Indicador do tipo de transporte da carga coletada: 0 - Rodoviário'
            . '1 - Ferroviário'
            . '2 - Rodo-Ferroviário'
            . '3 - Aquaviário'
            . '4 - Dutoviário'
            . '5 - Aéreo'
            . '9 - Outros',
            'format'   => ''
        ],
        'CNPJ_CPF_COL' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{14}$',
            'required' => true,
            'info'     => 'Número do CNPJ ou CPF do local da coleta',
            'format'   => ''
        ],
        'IE_COL' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{14}$',
            'required' => true,
            'info'     => 'Inscrição Estadual do contribuinte do local de coleta',
            'format'   => ''
        ],
        'COD_MUN_COL' => [
            'type'     => 'numeric',
            'regex'    => '',
            'required' => true,
            'info'     => 'Código do Município do local de coleta, conforme tabela IBGE',
            'format'   => ''
        ],
        'CNPJ_CPF_ENTG' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{14}$',
            'required' => true,
            'info'     => 'Número do CNPJ ou CPF do local da entrega',
            'format'   => ''
        ],
        'IE_ENTG' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{14}$',
            'required' => true,
            'info'     => 'Inscrição Estadual do contribuinte do local de entrega',
            'format'   => ''
        ],
        'COD_MUN_ENTG' => [
            'type'     => 'numeric',
            'regex' => '^[0-9]{7}$',
            'required' => true,
            'info'     => 'Código do Município do local de entrega, conforme tabela IBGE',
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
