<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class Z0120 extends Element implements ElementInterface
{
    const REG = 'Z0120';
    const LEVEL = 2;
    const PARENT = 'Z000';

    protected $parameters = [
        'REG' => [
            'type' => 'string',
            'regex' => '^.{4}$',
            'required' => false,
            'info' => 'Texto fixo contendo "0120”',
            'format' => ''
        ],
        'MES_REFER' => [
            'type' => 'string',
            'regex' => '^.{6}$',
            'required' => false,
            'info' => 'Mês&nbsp; de&nbsp; referência&nbsp; do&nbsp;&nbsp; ano-calendário&nbsp; da&nbsp; escrituração&nbsp; sem dados, dispensada da entrega. Campo a ser preenchido no formato “mmaaaa”',
            'format' => ''
        ],
        'INF_COMP' => [
            'type' => 'string',
            'regex' => '^.{0,90}$',
            'required' => false,
            'info' => 'Informação&nbsp;&nbsp;&nbsp; complementar&nbsp;&nbsp;&nbsp; do&nbsp;&nbsp;&nbsp; registro.&nbsp;&nbsp;&nbsp; No&nbsp;&nbsp;&nbsp; caso&nbsp;&nbsp;&nbsp; de escrituração&nbsp; sem&nbsp; dados,&nbsp; deve&nbsp; ser&nbsp; informado&nbsp; o&nbsp; real&nbsp; motivo dessa situação, conforme indicadores abaixo: 01 - Pessoa jurídica imune ou isenta do IRPJ 02 - Órgãos públicos, autarquias e fundações públicas 03 - Pessoa jurídica inativa 04&nbsp;&nbsp; -&nbsp;&nbsp; Pessoa&nbsp;&nbsp; jurídica&nbsp;&nbsp; em&nbsp;&nbsp; geral,&nbsp;&nbsp; que&nbsp;&nbsp; não&nbsp;&nbsp; realizou&nbsp;&nbsp; operações geradoras de receitas (tributáveis ou não) ou de créditos 05 - Sociedade em Conta de Participação - SCP, que não realizou operações geradoras de receitas (tributáveis ou não) ou de créditos 06 - Sociedade Cooperativa, que não realizou operações geradoras de receitas (tributáveis ou não) ou de créditos 07 - Escrituração decorrente de incorporação, fusão ou cisão, sem operações geradoras de receitas (tributáveis ou não) ou de créditos 99 - Demais hipóteses de dispensa de escrituração, relacionadas no art. 5º, da IN RFB nº 1.252, de 2012',
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
