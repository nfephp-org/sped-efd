<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class Z0111 extends Element implements ElementInterface
{
    const REG = '0111';
    const LEVEL = 3;
    const PARENT = '0110';

    protected $parameters = [
        'REC_BRU_NCUM_TRIB_MI' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Receita Bruta Não-Cumulativa - Tributada no Mercado Interno',
            'format' => '15v2'
        ],
        'REC_BRU_NCUM_NT_MI' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Receita Bruta Não-Cumulativa – Não Tributada no Mercado Interno
             (Vendas com suspensão, alíquota zero, isenção e sem incidência das contribuições)',
            'format' => '15v2'
        ],
        'REC_BRU_NCUM_EXP' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Receita Bruta Não-Cumulativa – Exportação',
            'format' => '15v2'
        ],
        'REC_BRU_CUM' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Receita Bruta Cumulativa',
            'format' => '15v2'
        ],
        'REC_BRU_TOTAL' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Receita Bruta Total',
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

    public function postValidation()
    {
        $somatorio = $this->values->rec_bru_ncum_trib_mi;
        $somatorio += $this->values->rec_bru_ncum_nt_mi;
        $somatorio += $this->values->rec_bru_ncum_exp;
        $somatorio += $this->values->rec_bru_cum;

        if ($this->values->rec_bru_total != $somatorio) {
            $this->errors[] = "[" . self::REG . "] " .
                " A soma dos valores dos campos 02, 03, 04 e " .
                "05 deve ser igual ao valor informado no campo REC_BRU_TOTAL.";
        }
    }
}
