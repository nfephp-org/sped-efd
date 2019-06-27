<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

/**
 * Elemento 0600 do Bloco 0
 *
 * NOTA: usada a letra Z no nome da Classe pois os nomes não podem ser exclusivamente
 * numeréricos e também para não confundir os com elementos do bloco B
 */
class Z0305 extends Element implements ElementInterface
{
    const REG = '0305';
    const LEVEL = 0;
    const PARENT = '';
    
    protected $parameters = [
        'COD_CCUS' => [
            'type'     => 'string',
            'regex'    => '^.{1,60}$',
            'required' => true,
            'info'     => 'Código do centro de custo',
            'format'   => ''
        ],
        'FUNC' => [
            'type'     => 'string',
            'regex'    => '^.{1,255}$',
            'required' => true,
            'info'     => 'Descrição sucinta da função do bem',
            'format'   => ''
        ],
        'VIDA_UTIL' => [
            'type'     => 'integer',
            'regex'    => '^[0-9]{1,3}$',
            'required' => false,
            'info'     => 'Vida útil estimada do bem, em número de meses',
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
