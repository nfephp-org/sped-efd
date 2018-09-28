<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

/**
 * REGISTRO C310: DOCUMENTOS CANCELADOS DE NOTAS FISCAIS DE VENDA A CONSUMIDOR (CÓDIGO 02).
 * Este registro tem por objetivo informar os números dos documentos fiscais cancelados.
 * @package NFePHP\EFD\Elements\ICMSIPI
 */
class C310 extends Element implements ElementInterface
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
     * @param \stdClass $std
     */
    public function __construct(\stdClass $std)
    {
        parent::__construct(self::REG);
        $this->std = $this->standarize($std);
    }
}
