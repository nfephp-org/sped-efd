<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

/**
 * Elemento 0002 do Bloco 0
 * REGISTRO 0002: Classificação do Estabelecimento Equiparado a Industrial
 *
 *
 *
 * NOTA: usada a letra Z no nome da Classe pois os nomes não podem ser exclusivamente
 * numeréricos e também para não confundir os com elementos do bloco B
 */
class Z0002 extends Element implements ElementInterface
{
    const REG = '0002';
    const LEVEL = 1;
    const PARENT = '0000';
    
    protected $parameters = [
        'CLAS_ESTAB_IND' => [
            'type'     => 'numeric',
            'regex'    => '^[0-1]{2}$',
            'required' => true,
            'info'     => 'Informar a classificação do estabelecimento conforme tabela 4.5.5',
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
