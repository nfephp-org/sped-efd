<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class Z1502 extends Element implements ElementInterface
{
    const REG = '1502';
    const LEVEL = 4;
    const PARENT = '1500';

    protected $parameters = [
        'VL_CRED_COFINS_TRIB_MI' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Parcela do Crédito de COFINS, vinculada a Receita Tributada no Mercado Interno ',
            'format' => '15v2'
        ],
        'VL_CRED_COFINS_NT_MI' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Parcela do Crédito de COFINS, vinculada a Receita Não Tributada no Mercado Interno ',
            'format' => '15v2'
        ],
        'VL_CRED_COFINS_EXP' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Parcela do Crédito de COFINS, vinculada a Receita de Exportação ',
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
