<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class Z0500 extends Element implements ElementInterface
{
    const REG = 'Z0500';
    const LEVEL = 2;
    const PARENT = 'Z0001';

    protected $parameters = [
        'DT_ALT' => [
            'type' => 'string',
            'regex' => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => false,
            'info' => 'Data da inclusão/alteração',
            'format' => ''
        ],
        'COD_NAT_CC' => [
            'type' => 'string',
            'regex' => '^(01|02|03|04|05|09)$',
            'required' => false,
            'info' => 'Código da natureza da conta/grupo de contas: 01 - Contas de ativo 02 - Contas de passivo; 03 - Patrimônio líquido; 04 - Contas de resultado; 05 - Contas de compensação; 09 - Outras.',
            'format' => ''
        ],
        'IND_CTA' => [
            'type' => 'string',
            'regex' => '^(S|A)$',
            'required' => false,
            'info' => 'Indicador do tipo de conta: S - Sintética (grupo de contas); A - Analítica (conta).',
            'format' => ''
        ],
        'NIVEL' => [
            'type' => 'numeric',
            'regex' => '^(\d{0,5})$',
            'required' => false,
            'info' => 'Nível da conta analítica/grupo de contas.',
            'format' => ''
        ],
        'COD_CTA' => [
            'type' => 'string',
            'regex' => '^.{0,255}$',
            'required' => false,
            'info' => 'Código da conta analítica/grupo de contas.',
            'format' => ''
        ],
        'NOME_CTA' => [
            'type' => 'string',
            'regex' => '^.{0,60}$',
            'required' => false,
            'info' => 'Nome da conta analítica/grupo de contas.',
            'format' => ''
        ],
        'COD_CTA_REF' => [
            'type' => 'string',
            'regex' => '^.{0,60}$',
            'required' => false,
            'info' => 'Código da conta correlacionada no Plano de Contas Referenciado, publicado pela RFB.',
            'format' => ''
        ],
        'CNPJ_EST' => [
            'type' => 'string',
            'regex' => '^[0-9]{14}$',
            'required' => false,
            'info' => 'CNPJ do estabelecimento, no caso da conta informada no campo COD_CTA ser específica de um estabelecimento.',
            'format' => ''
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
