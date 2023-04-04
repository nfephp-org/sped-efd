<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use stdClass;

/**
 * Elemento 0600 do Bloco 0
 *
 *
 * NOTA: usada a letra Z no nome da Classe pois os nomes não podem ser exclusivamente
 * numeréricos e também para não confundir os com elementos do bloco B
 */
class Z0600 extends Element
{
    const REG = '0600';
    const LEVEL = 2;
    const PARENT = '';

    protected $parameters = [
        'DT_ALT' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{8}$',
            'required' => true,
            'info'     => 'Data da inclusão/alteração',
            'format'   => ''
        ],
        'COD_CCUS' => [
            'type'     => 'string',
            'regex'    => '^.{1,60}$',
            'required' => true,
            'info'     => 'Código do centro de custo',
            'format'   => ''
        ],
        'CCUS' => [
            'type'     => 'string',
            'regex'    => '^.{1,60}$',
            'required' => true,
            'info'     => 'Nome do centro de custo',
            'format'   => ''
        ],
    ];

    /**
     * Constructor
     * @param stdClass $std
     * @param stdClass $vigencia
     */
    public function __construct(stdClass $std, stdClass $vigencia = null)
    {
        parent::__construct(self::REG, $vigencia);
        $this->replaceParams( self::REG);
        $this->std = $this->standarize($std);
        $this->postValidation();
    }
}
