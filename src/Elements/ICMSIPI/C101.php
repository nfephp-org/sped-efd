<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

/**
 * REGISTRO C101: INFORMAÇÃO COMPLEMENTAR DOS DOCUMENTOS FISCAIS
 * QUANDO DAS OPERAÇÕES INTERESTADUAIS DESTINADAS A CONSUMIDOR FINAL
 * NÃO CONTRIBUINTE EC 87/15 (CÓDIGO 55)
 * @package NFePHP\EFD\Elements\ICMSIPI
 */
class C101 extends Element implements ElementInterface
{
    const REG = 'C101';
    const LEVEL = 3;
    const PARENT = 'C100';

    protected $parameters = [
        'VL_FCP_UF_DEST' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor total relativo ao Fundo de Combate à Pobreza (FCP) da UF de destino',
            'format' => '15v2'
        ],
        'VL_ICMS_UF_DEST' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor total do ICMS Interestadual para a UF de destino',
            'format' => '15v2'
        ],
        'VL_ICMS_UF_REM' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor total do ICMS Interestadual para a UF do remetente',
            'format' => '15v2'
        ],
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
