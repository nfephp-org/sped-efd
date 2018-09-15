<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

/**
 * Elemento 0001 do Bloco 0
 * REGISTRO 0001: ABERTURA DO BLOCO 0
 * Este registro deve ser gerado para abertura do bloco 0 e indica as
 * informações previstas para este bloco.
 */
class B0001 extends Element implements ElementInterface
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
        parent::__construct(self::REG);
        $this->std = $this->standarize($std);
    }
}
