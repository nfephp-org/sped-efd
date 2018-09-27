<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class C405 extends Element implements ElementInterface
{
    const REG = 'C405';
    const LEVEL = 3;
    const PARENT = 'C400';

    protected $parameters = [
        'DT_DOC' => [
            'type' => 'string',
            'regex' => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => false,
            'info' => 'Data do movimento a que se refere a Redução Z',
            'format' => ''
        ],
        'CRO' => [
            'type' => 'numeric',
            'regex' => '^([1-9]{1})(\d{1,2})?$',
            'required' => false,
            'info' => 'Posição do Contador de Reinício de Operação',
            'format' => ''
        ],
        'CRZ' => [
            'type' => 'numeric',
            'regex' => '^([1-9]{1})(\d{1,5})?$',
            'required' => false,
            'info' => 'Posição do Contador de Redução Z',
            'format' => ''
        ],
        'NUM_COO_FIN' => [
            'type' => 'numeric',
            'regex' => '^([1-9]{1})(\d{1,8})$',
            'required' => false,
            'info' => 'Número do Contador de Ordem de Operação do último documento emitido no dia. (Número do COO na Redução Z)',
            'format' => ''
        ],
        'GT_FIN' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor do Grande Total final',
            'format' => '15v2'
        ],
        'VL_BRT' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor da venda bruta',
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
        $this->postValidation();
    }


}
