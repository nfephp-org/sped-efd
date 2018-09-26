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
        'COD_SELO_IPI' => [
            'type' => 'string',
            'regex' => '^.{6}$',
            'required' => false,
            'info' => 'Código do selo de controle do IPI, conforme Tabela 4.5.2',
            'format' => ''
        ],
        'QT_SELO_IPI' => [
            'type' => 'numeric',
            'regex' => '^(\d{0,12})$',
            'required' => false,
            'info' => 'Quantidade de selo de controle do IPI aplicada',
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
