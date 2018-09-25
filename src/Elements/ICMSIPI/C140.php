<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class C140 extends Element implements ElementInterface
{
    const REG = 'C140';
    const LEVEL = 3;
    const PARENT = 'C100';

    protected $parameters = [
        'IND_EMIT' => [
            'type' => 'string',
            'regex' => '^[0-1]{1}$',
            'required' => true,
            'info' => 'Indicador do emitente do documento fiscal',
            'format' => ''
        ],
        'IND_TIT' => [
            'type' => 'string',
            'regex' => '^(01|02|03|99)$',
            'required' => true,
            'info' => 'Indicador do tipo de título de crédito',
            'format' => ''
        ],
        'DESC_TIT' => [
            'type' => 'string',
            'regex' => '^(.*)$',
            'required' => false,
            'info' => 'Descrição complementar do título de crédito',
            'format' => ''
        ],
        'NUM_TIT' => [
            'type' => 'string',
            'regex' => '^(.*)$',
            'required' => true,
            'info' => 'Número ou código identificador do título de crédito',
            'format' => ''
        ],
        'QTD_PARC' => [
            'type' => 'integer',
            'regex' => '^([0-9]{1,2})$',
            'required' => true,
            'info' => 'Quantidade de parcelas a receber/pagar',
            'format' => ''
        ],
        'VL_TIT' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Valor total dos títulos de créditos',
            'format' => '15v2'
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
