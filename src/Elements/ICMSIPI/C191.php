<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

/**
 * REGISTRO C191: INFORMAÇÕES DO FUNDO DE COMBATE À POBREZA – FCP – NA NFe (CÓDIGO 55)
 * Este registro tem por objetivo prestar informações do Fundo de Combate à Pobreza (FCP), constante na NF-e . Os
 * valores deste registro são meramente informativos e não são contabilizados na apuração dos registros no bloco E.
 * A obrigatoriedade e forma de apresentação de cada campo deste
 * registro deve ser verificada junto às unidades federativas.
 * @package NFePHP\EFD\Elements\ICMSIPI
 */
class C191 extends Element implements ElementInterface
{
    const REG = 'C191';
    const LEVEL = 4;
    const PARENT = 'C190';

    protected $parameters = [
        'VL_FCP_OP' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor do Fundo de Combate à Pobreza (FCP) vinculado à operação própria, 
            na combinação de CST_ICMS, CFOP e alíquota do ICMS',
            'format' => '15v2'
        ],
        'VL_FCP_ST' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor do Fundo de Combate à Pobreza (FCP) vinculado à operação de substituição 
            tributária, na combinação de CST_ICMS, CFOP e alíquota do ICMS.',
            'format' => '15v2'
        ],
        'VL_FCP_RET' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor relativo ao Fundo de Combate à Pobreza (FCP) retido anteriormente nas
             operações com Substituição Tributárias, na combinação de CST_ICMS, CFOP e alíquota do ICMS',
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
