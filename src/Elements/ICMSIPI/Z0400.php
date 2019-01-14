<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

/**
 * Elemento 0400 do Bloco 0
 *
 * Este registro tem por objetivo codificar os textos das diferentes 
 * naturezas  da operação/prestações discriminadas nos documentos fiscais. 
 * Esta codificação  e suas descrições são livremente criadas e mantidas 
 * pelo contribuinte.
 * 
 * Este registro não se refere a CFOP. Algumas empresas utilizam outra 
 * classificação  além das apresentadas nos CFOP. Esta codificação permite 
 * informar estes agrupamentos próprios.
 * 
 * NOTA: usada a letra Z no nome da Classe pois os nomes não podem ser exclusivamente
 * numeréricos e também para não confundir os com elementos do bloco B
 */
class Z0400 extends Element implements ElementInterface
{
    const REG = '0400';
    const LEVEL = 0;
    const PARENT = '';
    
    protected $parameters = [
        'COD_NAT' => [
            'type'     => 'string',
            'regex'    => '^.{1,10}$',
            'required' => true,
            'info'     => 'Código da natureza da operação/prestação',
            'format'   => ''
        ],
        'DESCR_NAT' => [
            'type'     => 'string',
            'regex'    => '^.{1,255}$',
            'required' => true,
            'info'     => 'Descrição da natureza da operação/prestação',
            'format'   => ''
        ]
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
