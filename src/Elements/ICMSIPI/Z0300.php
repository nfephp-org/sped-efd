<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use stdClass;

/**
 * Elemento 0300 do Bloco 0
 *
 *
 * NOTA: usada a letra Z no nome da Classe pois os nomes não podem ser exclusivamente
 * numeréricos e também para não confundir os com elementos do bloco B
 */
class Z0300 extends Element
{
    const REG = '0300';
    const LEVEL = 2;
    const PARENT = '';

    protected $parameters = [
        'COD_IND_BEM' => [
            'type'     => 'string',
            'regex'    => '^.{1,60}$',
            'required' => true,
            'info'     => 'Código individualizado do bem ou componente',
            'format'   => ''
        ],
        'IDENT_MERC' => [
            'type'     => 'integer',
            'regex'    => '^[1-2]{1}$',
            'required' => true,
            'info'     => 'Identificação do tipo de mercadoria',
            'format'   => ''
        ],
        'DESCR_ITEM' => [
            'type'     => 'string',
            'regex'    => '^.{1,255}$',
            'required' => true,
            'info'     => 'Descrição do bem ou componente',
            'format'   => ''
        ],
        'COD_PRNC' => [
            'type'     => 'string',
            'regex'    => '^.{0,60}$',
            'required' => false,
            'info'     => 'Código de cadastro do bem principal',
            'format'   => ''
        ],
        'COD_CTA' => [
            'type'     => 'string',
            'regex'    => '^.{1,60}$',
            'required' => true,
            'info'     => 'Código da conta analítica de contabilização',
            'format'   => ''
        ],
        'NR_PARC' => [
            'type'     => 'integer',
            'regex'    => '^[0-9]{1,3}$',
            'required' => false,
            'info'     => 'Número total de parcelas a serem apropriadas',
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
