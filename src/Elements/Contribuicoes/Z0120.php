<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class Z0120 extends Element implements ElementInterface
{
    const REG = '0120';
    const LEVEL = 2;
    const PARENT = '000';

    protected $parameters = [
        'MES_REFER' => [
            'type' => 'string',
            'regex' => '^.{6}$',
            'required' => false,
            'info' => 'Mês de referência do ano-calendário da escrituração sem dados, 
            dispensada da entrega. Campo a ser preenchido no formato “mmaaaa”',
            'format' => ''
        ],
        'INF_COMP' => [
            'type' => 'string',
            'regex' => '^.{0,90}$',
            'required' => false,
            'info' => 'Informação complementar do registro. No caso de escrituração sem dados, 
            deve ser informado o real motivo dessa situação, conforme indicadores abaixo: 
            01 - Pessoa jurídica imune ou isenta do IRPJ 
            02 - Órgãos públicos, autarquias e fundações públicas 
            03 - Pessoa jurídica inativa 
            04 - Pessoa jurídica em geral, que não realizou operações geradoras de receitas 
            (tributáveis ou não) ou de créditos
             05 - Sociedade em Conta de Participação - SCP, que não realizou operações 
             geradoras de receitas (tributáveis ou não) ou de créditos 
             06 - Sociedade Cooperativa, que não realizou operações 
             geradoras de receitas (tributáveis ou não) ou de créditos 
             07 - Escrituração decorrente de incorporação, fusão ou cisão, sem operações geradoras 
             de receitas (tributáveis ou não) ou de créditos 
             99 - Demais hipóteses de dispensa de escrituração, relacionadas no art. 5º, 
             da IN RFB nº 1.252, de 2012',
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
