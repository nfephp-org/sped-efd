<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

/**
 * REGISTRO K001: ABERTURA DO BLOCO K
 * Este registro deve ser gerado para abertura do bloco K, indicando se há
 * registros de informações no bloco.
 */
class K001 extends Element implements ElementInterface
{
    const REG = 'K001';
    const LEVEL = 1;
    const PARENT = '';

    protected $parameters = [
        'ind_mov' => [
            'type'     => 'numeric',
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
