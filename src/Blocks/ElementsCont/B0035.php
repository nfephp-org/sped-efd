<?php

namespace NFePHP\EFD\Blocks\ElementsCont;

use NFePHP\EFD\Blocks\ElementBase;
use NFePHP\EFD\Blocks\ElementInterface;
use \stdClass;

class B0035 extends ElementBase implements ElementInterface
{
    const REG = '0035';
    const LEVEL = 0;
    const PARENT = '';
    
    protected $parameters = [];
    
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
