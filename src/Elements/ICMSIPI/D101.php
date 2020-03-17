<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class D101 extends Element implements ElementInterface
{
    const REG = 'D101';
    const LEVEL = 3;
    const PARENT = '';

    protected $parameters = [
        'VL_FCP_UF_DEST' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total relativo ao Fundo de Combate à Pobreza (FCP) da UF de destino',
            'format'   => '15v2'
        ],
        'VL_ICMS_UF_DEST' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total do ICMS Interestadual para a UF de destino',
            'format'   => '15v2'
        ],
        'VL_ICMS_UF_REM' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total do ICMS Interestadual para a UF do remetente',
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
