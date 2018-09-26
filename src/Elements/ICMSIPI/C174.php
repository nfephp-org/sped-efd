<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

/**
 * REGISTRO C174: OPERAÇÕES COM ARMAS DE FOGO (CÓDIGO 01)
 * Este registro deve ser apresentado pelas empresas que realizam operações com armas de fogo (indústria, comércio e
 * demais) e deve ser fornecido apenas para operações de saída.
 * @package NFePHP\EFD\Elements\ICMSIPI
 */
class C174 extends Element implements ElementInterface
{
    const REG = 'C174';
    const LEVEL = 4;
    const PARENT = '';

    protected $parameters = [
        'IND_ARM' => [
            'type' => 'string',
            'regex' => '^(0|1)$',
            'required' => false,
            'info' => 'Indicador do tipo da arma de fogo',
            'format' => ''
        ],
        'NUM_ARM' => [
            'type' => 'string',
            'regex' => '^(.*)$',
            'required' => false,
            'info' => 'Numeração de série de fabricação da arma',
            'format' => ''
        ],
        'DESCR_COMPL' => [
            'type' => 'string',
            'regex' => '^(.*)$',
            'required' => false,
            'info' => 'Descrição  da arma',
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
