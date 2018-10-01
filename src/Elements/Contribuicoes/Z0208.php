<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class Z0208 extends Element implements ElementInterface
{
    const REG = 'Z0208';
    const LEVEL = 4;
    const PARENT = 'Z0200';

    protected $parameters = [
        'COD_TAB' => [
            'type' => 'string',
            'regex' => '^(0?[1-9]$)|(^1[0-3]$)$',
            'required' => false,
            'info' => 'Código indicador da Tabela de Incidência, conforme Anexo III do Decreto nº 6.707/08: 01 – Tabela I 02 – Tabela II 03 – Tabela III 04 – Tabela IV 05 – Tabela V 06 – Tabela VI 07 – Tabela VII 08– Tabela VIII 09 – Tabela IX 10 – Tabela X 11 – Tabela XI 12 – Tabela XII',
            'format' => ''
        ],
        'COD_GRU' => [
            'type' => 'string',
            'regex' => '^.{0,2}$',
            'required' => false,
            'info' => 'Código do grupo, conforme Anexo III do Decreto nº 6.707/08.',
            'format' => ''
        ],
        'MARCA_COM' => [
            'type' => 'string',
            'regex' => '^.{0,60}$',
            'required' => false,
            'info' => 'Marca Comercial',
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
