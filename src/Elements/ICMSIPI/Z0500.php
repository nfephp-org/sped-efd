<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

/**
 * Elemento 0500 do Bloco 0
 *
 *
 * NOTA: usada a letra Z no nome da Classe pois os nomes não podem ser exclusivamente
 * numeréricos e também para não confundir os com elementos do bloco B
 */
class Z0500 extends Element implements ElementInterface
{
    const REG = '0500';
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
        'COD_NAT_CC' => [
            'type'     => 'string',
            'regex'    => '^(01|02|03|04|05|09)$',
            'required' => true,
            'info'     => 'Código da natureza da conta/grupo de contas',
            'format'   => ''
        ],
        'IND_CTA' => [
            'type'     => 'string',
            'regex'    => '^(A|S)$',
            'required' => true,
            'info'     => 'Indicador do tipo de conta',
            'format'   => ''
        ],
        'NIVEL' => [
            'type'     => 'integer',
            'regex'    => '^[0-9]{1,5}$',
            'required' => true,
            'info'     => 'Nível da conta analítica/grupo de contas',
            'format'   => ''
        ],
        'COD_CTA' => [
            'type'     => 'string',
            'regex'    => '^.{1,60}$',
            'required' => true,
            'info'     => 'Código da conta analítica/grupo de contas.',
            'format'   => ''
        ],
        'NOME_CTA' => [
            'type'     => 'string',
            'regex'    => '^.{1,60}$',
            'required' => true,
            'info'     => 'Nome da conta analítica/grupo de contas',
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
