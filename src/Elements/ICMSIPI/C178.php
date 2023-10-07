<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use stdClass;

/**
 * REGISTRO C178: OPERAÇÕES COM PRODUTOS SUJEITOS À TRIBUTAÇÃO DE IPI POR
 * UNIDADE OU QUANTIDADE DE PRODUTO
 * O registro tem por objetivo fornecer informações adicionais sobre os produtos cuja forma de tributação do IPI,
 * fixada em reais, seja calculada por unidade ou por determinada quantidade de produto, conforme tabelas de classes de
 * valores.
 * @package NFePHP\EFD\Elements\ICMSIPI
 */
class C178 extends Element
{
    const REG = 'C178';
    const LEVEL = 4;
    const PARENT = 'C170';

    protected $parameters = [
        'CL_ENQ' => [
            'type' => 'string',
            'regex' => '^.{0,5}$',
            'required' => false,
            'info' => 'Código da classe de enquadramento do IPI, conforme Tabela 4.5.1.',
            'format' => ''
        ],
        'VL_UNID' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor por unidade padrão de tributação',
            'format' => '15v2'
        ],
        'QUANT_PAD' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Quantidade total de produtos na unidade padrão de tributação',
            'format' => '15v3'
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
