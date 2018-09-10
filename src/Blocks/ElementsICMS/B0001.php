<?php

namespace NFePHP\EFD\Blocks\ElementsICMS;

use NFePHP\EFD\Blocks\ElementBase;
use NFePHP\EFD\Blocks\ElementInterface;
use \stdClass;

/**
 * Elemento 0001 do Bloco 0 
 */
class B0001 extends ElementBase implements ElementInterface
{
    const REG = '0001';
    const LEVEL = 1;
    const PARENT = '0000';
    
    protected $parameters = [
        'ind_mov' => [
            'type'     => 'integer',
            'regex'    => '^[0-1]{1}$',
            'required' => true,
            'info'     => 'Indicador de movimento: 0- Bloco com dados informados; 1- Bloco sem dados informados.',
            'format'   => ''
        ]
    ];
    
    /**
     * Constructor
     * @param \stdClass $std
     */
    public function __construct(\stdClass $std)
    {
        parent::__construct();
        $this->std = $this->standarize($std, self::REG);
    }
    
    /**
     * Retorna o elemento formatado em uma string
     * @return string
     */
    public function __toString()
    {
        return '|' . self::REG . '|' . $this->build();
    }
}
