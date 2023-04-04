<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use stdClass;

class D400 extends Element
{
    const REG = 'D400';
    const LEVEL = 2;
    const PARENT = '';

    protected $parameters = [
        'COD_PART' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{60}$',
            'required' => true,
            'info'     => 'Código do participante (campo 02 do Registro 0150):'
            . '- agência, filial ou posto',
            'format'   => ''
        ],
        'COD_MOD' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{2}$',
            'required' => true,
            'info'     => 'Código do modelo do documento fiscal, conforme a tabela 4.1.1',
            'format'   => ''
        ],
        'COD_SIT' => [
            'type'     => 'numeric',
            'regex'    => '',
            'required' => true,
            'info'     => 'Código da situação do documento fiscal, conforme a tabela 4.1.2',
            'format'   => ''
        ],
        'SER' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{4}$',
            'required' => true,
            'info'     => 'Série do documento fiscal',
            'format'   => ''
        ],
        'SUB' => [
            'type'     => 'numeric',
            'regex'    => '^[0-9]{3}$',
            'required' => true,
            'info'     => 'Subsérie do documento fiscal',
            'format'   => ''
        ],
        'NUM_DOC' => [
            'type'     => 'numeric',
            'regex'    => '^[0-9]{6}$',
            'required' => true,
            'info'     => 'Número do documento fiscal resumo.',
            'format'   => ''
        ],
        'DT_DOC' => [
            'type'     => 'numeric',
            'regex'    => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => true,
            'info'     => 'Data da emissão do documento fiscal',
            'format'   => ''
        ],
        'VL_DOC' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total do documento fiscal',
            'format'   => '15v2'
        ],
        'VL_DESC' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor acumulado dos descontos',
            'format'   => '15v2'
        ],
        'VL_SERV' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor acumulado da prestação de serviço',
            'format'   => '15v2'
        ],
        'VL_BC_ICMS' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total da base de cálculo do ICMS',
            'format'   => '15v2'
        ],
        'VL_ICMS' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor total do ICMS',
            'format'   => '15v2'
        ],
        'VL_PIS' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor do PIS',
            'format'   => '15v2'
        ],
        'VL_COFINS' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor da COFINS',
            'format'   => '15v2'
        ],
        'COD_CTA' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{0}$',
            'required' => true,
            'info'     => 'Código da conta analítica contábil debitada/creditada',
            'format'   => ''
        ]
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
