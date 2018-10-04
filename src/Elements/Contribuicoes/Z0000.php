<?php

namespace NFePHP\EFD\Elements\Contribuicoes;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class Z0000 extends Element implements ElementInterface
{
    const REG = '0000';
    const LEVEL = 0;
    const PARENT = '';

    protected $parameters = [
        'COD_VER' => [
            'type' => 'numeric',
            'regex' => '^(\d{3})$',
            'required' => false,
            'info' => 'Código da versão do leiaute conforme a tabela 3.1.1.',
            'format' => ''
        ],
        'TIPO_ESCRIT' => [
            'type' => 'numeric',
            'regex' => '^(0|1)$',
            'required' => false,
            'info' => 'Tipo de escrituração: 0 - Original; 1 – Retificadora.',
            'format' => ''
        ],
        'IND_SIT_ESP' => [
            'type' => 'numeric',
            'regex' => '^([0-4]{1})$',
            'required' => false,
            'info' => 'Indicador de situação especial: 0 - Abertura 1 - Cisão 
            2 - Fusão 3 - Incorporação 4 – Encerramento',
            'format' => ''
        ],
        'NUM_REC_ANTERIOR' => [
            'type' => 'string',
            'regex' => '^.{41}$',
            'required' => false,
            'info' => 'Número do Recibo da Escrituração anterior 
            a ser retificada, utilizado quando TIPO_ESCRIT for igual a 1',
            'format' => ''
        ],
        'DT_INI' => [
            'type' => 'string',
            'regex' => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => false,
            'info' => 'Data inicial das informações contidas no arquivo.',
            'format' => ''
        ],
        'DT_FIN' => [
            'type' => 'string',
            'regex' => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => false,
            'info' => 'Data final das informações contidas no arquivo.',
            'format' => ''
        ],
        'NOME' => [
            'type' => 'string',
            'regex' => '^.{0,100}$',
            'required' => false,
            'info' => 'Nome empresarial da pessoa jurídica',
            'format' => ''
        ],
        'CNPJ' => [
            'type' => 'string',
            'regex' => '^[0-9]{14}$',
            'required' => false,
            'info' => 'Número de inscrição do estabelecimento matriz da pessoa jurídica no CNPJ.',
            'format' => ''
        ],
        'UF' => [
            'type' => 'string',
            'regex' => '^.{2}$',
            'required' => false,
            'info' => 'Sigla da Unidade da Federação da pessoa',
            'format' => ''
        ],
        'COD_MUN' => [
            'type' => 'numeric',
            'regex' => '^(\d{7})$',
            'required' => false,
            'info' => 'Código do município do domicílio fiscal da pessoa jurídica, conforme a tabela IBGE',
            'format' => ''
        ],
        'SUFRAMA' => [
            'type' => 'string',
            'regex' => '^.{9}$',
            'required' => false,
            'info' => 'Inscrição da pessoa jurídica na Suframa',
            'format' => ''
        ],
        'IND_NAT_PJ' => [
            'type' => 'numeric',
            'regex' => '^(0)([0-5]{1})$',
            'required' => false,
            'info' => 'Indicador da natureza da pessoa jurídica: 
            00 – Pessoa jurídica em geral 01 – Sociedade cooperativa 02 – Entidade sujeita ao PIS/Pasep 
            exclusivamente com base na Folha de Salários',
            'format' => ''
        ],
        'IND_ATIV' => [
            'type' => 'numeric',
            'regex' => '^(0|1|2|3|4|9)$',
            'required' => false,
            'info' => 'Indicador de tipo de atividade preponderante: 
            0 – Industrial ou equiparado a industrial; 1 – Prestador de serviços; 2 - Atividade de comércio;
             3 – Pessoas jurídicas referidas nos §§ 6º, 8º e 9º do art. 3º da Lei nº 9.718, de 1998;
              4 – Atividade imobiliária; 9 – Outros.',
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
