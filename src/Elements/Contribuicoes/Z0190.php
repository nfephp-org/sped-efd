<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class Z0190 extends Element implements ElementInterface
{
    const REG = 'Z0190';
    const LEVEL = 3;
    const PARENT = 'Z1000';

    protected $parameters = [
        'UNID' => [
            'type' => 'string',
            'regex' => '^.{0,6}$',
            'required' => false,
            'info' => 'Código da unidade de medida',
            'format' => ''
        ],
        'DESCR' => [
            'type' => 'string',
            'regex' => '^(.*)$',
            'required' => false,
            'info' => 'Descrição da unidade de medida',
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
        $this->postValidation();
    }

    public function postValidation()
    {
        if($this->std->unid == $this->std->descr){
            throw new \InvalidArgumentException("[" . self::REG . "] " .
                " Os campos UNID e DESCR ");
        }
    }
}
