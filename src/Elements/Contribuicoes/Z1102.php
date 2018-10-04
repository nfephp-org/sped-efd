<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class Z1102 extends Element implements ElementInterface
{
    const REG = '1102';
    const LEVEL = 3;
    const PARENT = '110';

    protected $parameters = [
        'VL_CRED_PIS_TRIB_MI' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Parcela do Crédito de PIS/PASEP, vinculada a Receita Tributada no Mercado Interno ',
            'format' => '15v2'
        ],
        'VL_CRED_PIS_NT_MI' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Parcela do Crédito de PIS/PASEP, vinculada a Receita Não Tributada no Mercado Interno ',
            'format' => '15v2'
        ],
        'VL_CRED_PIS_EXP' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Parcela do Crédito de PIS/PASEP, vinculada a Receita de Exportação ',
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
