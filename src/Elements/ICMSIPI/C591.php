<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

/**
 * REGISTRO C591:INFORMAÇÕES DO FUNDO DE COMBATE À POBREZA – FCP NA NF3e (CÓDIGO 66)
 * @package NFePHP\EFD\Elements\ICMSIPI
 */
class C591 extends Element implements ElementInterface
{
    const REG = 'C591';
    const LEVEL = 4;
    const PARENT = 'C590';
    
    protected $parameters = [
        'VL_FCP_OP' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor do Fundo de Combate à Pobreza (FCP) vinculado à operação própria, na combinação '
            .'de CST_ICMS, CFOP e alíquota do ICMS',
            'format'   => '15v2'
        ],
        'VL_FCP_ST' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor do Fundo de Combate à Pobreza (FCP) vinculado à operação de substituição tributária, '
            .'na combinação de CST_ICMS, CFOP e alíquota do ICMS.',
            'format'   => '15v2'
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
