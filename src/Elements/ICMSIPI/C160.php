<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class C160 extends Element implements ElementInterface
{
    const REG = 'C160';
    const LEVEL = 3;
    const PARENT = 'C100';

    protected $parameters = [
        'COD_PART' => [
            'type' => 'string',
            'regex' => '^.{1,60}$',
            'required' => false,
            'info' => 'Código do participante',
            'format' => ''
        ],
        'VEIC_ID' => [
            'type' => 'string',
            'regex' => '^[A-Z]{3}[\d]{1}[\dA-Z]{1}[\d]{2}$',
            'required' => false,
            'info' => 'Placa de identificação do veículo automotor',
            'format' => ''
        ],
        'QTD_VOL' => [
            'type' => 'numeric',
            'regex' => '^([\d]+)$',
            'required' => false,
            'info' => 'Quantidade de volumes transportados',
            'format' => ''
        ],
        'PESO_BRT' => [
            'type' => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Peso bruto dos volumes transportados (em Kg)',
            'format' => '15v2'
        ],
        'PESO_LIQ' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Peso líquido dos volumes transportados (em Kg)',
            'format' => '15v2'
        ],
        'UF_ID' => [
            'type' => 'string',
            'regex' => '^[A-z]{2}$',
            'required' => false,
            'info' => 'Sigla da UF da placa do veículo',
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
