<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use stdClass;

/**
 * REGISTRO C310: DOCUMENTOS CANCELADOS DE NOTAS FISCAIS DE VENDA A CONSUMIDOR (CÓDIGO 02).
 * Este registro tem por objetivo informar os números dos documentos fiscais cancelados.
 * @package NFePHP\EFD\Elements\ICMSIPI
 */
class C310 extends Element
{
    const REG = 'C310';
    const LEVEL = 3;
    const PARENT = 'C300';

    protected $parameters = [
        'NUM_DOC_CANC' => [
            'type' => 'numeric',
            'regex' => '^([0-9]+)$',
            'required' => false,
            'info' => 'Número do documento fiscal cancelado',
            'format' => ''
        ],
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
