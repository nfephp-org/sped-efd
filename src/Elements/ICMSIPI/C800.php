<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\Common\Keys;
use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

/**
 * REGISTRO C800:CUPOM FISCAL ELETRÔNICO - SAT (CF-e-SAT) (CÓDIGO 59)
 * @package NFePHP\EFD\Elements\ICMSIPI
 */
class C800 extends Element implements ElementInterface
{
    const REG = 'C800';
    const LEVEL = 2;
    const PARENT = 'C001';

    protected $parameters = [
        'COD_MOD' => [
            'type' => 'string',
            'regex' => '^(59)$',
            'required' => true,
            'info' => 'Código do modelo do documento fiscal, conforme a Tabela 4.1.1',
            'format' => ''
        ],
        'COD_SIT' => [
            'type' => 'numeric',
            'regex' => '^(00|01|02|03)$',
            'required' => true,
            'info' => 'Código da situação do documento fiscal, conforme a Tabela 4.1.2',
            'format' => ''
        ],
        'NUM_CFE' => [
            'type' => 'numeric',
            'regex' => '^(\d{1,6})$',
            'required' => true,
            'info' => 'Número do Cupom Fiscal Eletrônico',
            'format' => ''
        ],
        'DT_DOC' => [
            'type' => 'string',
            'regex' => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => true,
            'info' => 'Data da emissão do Cupom Fiscal Eletrônico',
            'format' => ''
        ],
        'VL_CFE' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Valor total do Cupom Fiscal Eletrônico',
            'format' => '15v2'
        ],
        'VL_PIS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor total do PIS',
            'format' => '15v2'
        ],
        'VL_COFINS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor total da COFINS',
            'format' => '15v2'
        ],
        'CNPJ_CPF' => [
            'type' => 'string',
            'regex' => '^([0-9]{11}|[0-9]{14})$',
            'required' => false,
            'info' => 'CNPJ ou CPF do destinatário',
            'format' => ''
        ],
        'NR_SAT' => [
            'type' => 'numeric',
            'regex' => '^(\d{1,9})$',
            'required' => true,
            'info' => 'Número de Série do equipamento SAT',
            'format' => ''
        ],
        'CHV_CFE' => [
            'type' => 'numeric',
            'regex' => '^([0-9]{44})?$',
            'required' => true,
            'info' => 'Chave do Cupom Fiscal Eletrônico',
            'format' => ''
        ],
        'VL_DESC' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Valor total de descontos',
            'format' => '15v2'
        ],
        'VL_MERC' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Valor total das mercadorias e serviços',
            'format' => '15v2'
        ],
        'VL_OUT_DA' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Valor total de outras despesas acessórias e acréscimos',
            'format' => '15v2'
        ],
        'VL_ICMS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Valor do ICMS',
            'format' => '15v2'
        ],
        'VL_PIS_ST' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Valor total do PIS retido por subst. trib.',
            'format' => '15v2'
        ],
        'VL_COFINS_ST' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Valor total da COFINS retido por subst. trib.',
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
        if (!empty($this->std->chv_nfe) and !Keys::isValid($this->std->chv_nfe)) {
            $this->errors[] = "[" . self::REG . "] "
                . " Dígito verificador incorreto no campo campo chave da "
                . "nota fiscal eletronica (CHV_NFE)";
        }

        return true;
    }
}
