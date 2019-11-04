<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

/**
 * REGISTRO C177: COMPLEMENTO DE ITEM - OUTRAS INFORMAÇÕES (código 01, 55) -
 * (VÁLIDO A PARTIR DE 01/01/2019)
 * Este registro deverá ser apresentado somente pelos contribuintes
 * obrigados por legislação específica de cada UF, com o
 * objetivo de agregar informações adicionais ao item, de acordo com tabela a ser publicada pela UF.
 * @package NFePHP\EFD\Elements\ICMSIPI
 */
class C177 extends Element implements ElementInterface
{
    const REG = 'C177';
    const LEVEL = 4;
    const PARENT = 'C170';

    protected $parameters = [
        'COD_INF_ITEM' => [
            'type' => 'string',
            'regex' => '^.{8}$',
            'required' => false,
            'info' => '5.6 – Tabela informações adicionais dos itens do documento fiscal',
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
