<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

/**
 * Elemento 0600 do Bloco 0
 */
class B0305 extends Element implements ElementInterface
{
    const REG = '0305';
    const LEVEL = 0;
    const PARENT = '';
    
    protected $parameters = [];
    
    /**
     * Constructor
     * @param stdClass $std
     */
    public function __construct(stdClass $std)
    {
        parent::__construct(self::REG);
        $this->std = $this->standarize($std);
    }
}
