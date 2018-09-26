<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class D500 extends Element implements ElementInterface
{
    const REG = 'D500';
    const LEVEL = 2;
    const PARENT = 'D001';

    protected $parameters = [
        'IND_OPER' => [
            'type' => 'string',
            'regex' => '^[0-1]{1}$',
            'required' => true,
            'info' => 'Indicador do tipo de operação',
            'format' => ''
        ],
        'IND_EMIT' => [
            'type' => 'string',
            'regex' => '^[0-1]{1}$',
            'required' => true,
            'info' => 'Indicador do emitente do documento fiscal',
            'format' => ''
        ],
        'COD_PART' => [
            'type' => 'numeric',
            'regex' => '^([0-9a-z]{1,66})?$',
            'required' => true,
            'info' => 'Código do participante (campo 02 do Registro 0150):',
            'format' => ''
        ],
        'COD_MOD' => [
            'type' => 'string',
            'regex' => '^(21|22)+$',
            'required' => true,
            'info' => 'Código do modelo do documento fiscalValor total do estoque',
            'format' => ''
        ],
        'COD_SIT' => [
            'type' => 'numeric',
            'regex' => '^(0)([0-9]{1})?$',
            'required' => true,
            'info' => 'Código da situação do documento fiscal',
            'format' => ''
        ],
        'SER' => [
            'type' => 'string',
            'regex' => '^([0-9a-z]{3,4})?$',
            'required' => false,
            'info' => 'Série do documento fiscal',
            'format' => ''
        ],
        'SUB' => [
            'type' => 'string',
            'regex' => '^([0-9a-z]{3})?$',
            'required' => false,
            'info' => 'Subsérie do documento fiscal ',
            'format' => ''
        ],
        'NUM_DOC' => [
            'type' => 'numeric',
            'regex' => '^([0-1]{1})([0-9]{1,8})?$',
            'required' => true,
            'info' => 'Número do documento fiscal',
            'format' => ''
        ],
        'DT_DOC' => [
            'type' => 'string',
            'regex' => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => true,
            'info' => 'Data da emissão do documento fiscal',
            'format' => ''
        ],
        'DT_A_P' => [
            'type' => 'string',
            'regex' => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => true,
            'info' => 'Data da entrada (aquisição) ou da saída (prestação do serviço)',
            'format' => ''
        ],
        'VL_DOC' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Valor total do documento fiscal',
            'format' => '15v2'
        ],
        'VL_DESC' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor total do desconto',
            'format' => '15v2'
        ],
        'VL_SERV' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Valor total da prestação de serviço',
            'format' => '15v2'
        ],
        'VL_SERV_NT' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor total dos serviços não-tributados pelo ICMS',
            'format' => '15v2'
        ],
        'VL_TERC' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valores cobrados em nome de terceiros',
            'format' => '15v2'
        ],
        'VL_DA' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor de outras despesas indicadas no documento fiscal',
            'format' => '15v2'
        ],
        'VL_BC_ICMS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor da base de cálculo do ICMS',
            'format' => '15v2'
        ],
        'VL_ICMS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor do ICMS',
            'format' => '15v2'
        ],
        'COD_INF' => [
            'type' => 'numeric',
            'regex' => '^([0-1]{1,6})$',
            'required' => false,
            'info' => 'Código da informação complementar do documento fiscal',
            'format' => ''
        ],
        'VL_PIS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor do PIS',
            'format' => '15v2'
        ],
        'VL_COFINS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor da COFINS',
            'format' => '15v2'
        ],
        'COD_CTA' => [
            'type' => 'string',
            'regex' => '(.*)',
            'required' => false,
            'info' => 'Código da conta analítica contábil debitada/creditada',
            'format' => ''
        ],
        'TP_ASSINANTE' => [
            'type' => 'numeric',
            'regex' => '^(1|2|3|4|5|6)$',
            'required' => false,
            'info' => 'Código do Tipo de Assinante',
            'format' => ''
        ]
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
