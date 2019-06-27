<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

/**
 * Elemento 0460 do Bloco 0
 *
 *
 * NOTA: usada a letra Z no nome da Classe pois os nomes não podem ser exclusivamente
 * numeréricos e também para não confundir os com elementos do bloco B
 */
class Z0460 extends Element implements ElementInterface
{
    const REG = '0460';
    const LEVEL = 3;
    const PARENT = '';
    
    protected $parameters = [
        'COD_OBS' => [
            'type'     => 'string',
            'regex'    => '^.{1,6}$',
            'required' => true,
            'info'     => 'Código da Observação do lançamento fiscal',
            'format'   => ''
        ],
        'TXT' => [
            'type'     => 'string',
            'regex'    => '^.{1,255}$',
            'required' => true,
            'info'     => 'Descrição da observação vinculada ao lançamento fiscal',
            'format'   => ''
        ],
    ];
    
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
