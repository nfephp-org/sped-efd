<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

/**
 * Elemento 0206 do Bloco 0
 * 
 * NOTA: usada a letra Z no nome da Classe pois os nomes não podem ser exclusivamente 
 * numeréricos e também para não confundir os com elementos do bloco B
 */
class Z0206 extends Element implements ElementInterface
{
    const REG = '0206';
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
