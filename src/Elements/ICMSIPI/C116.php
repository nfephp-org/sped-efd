<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\Common\Keys;
use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class C116 extends Element implements ElementInterface
{
    const REG = 'C116';
    const LEVEL = 4;
    const PARENT = 'C110';

    protected $parameters = [
        'COD_MOD' => [
            'type' => 'string',
            'regex' => '^(59)+$',
            'required' => true,
            'info' => 'Código do modelo do documento fiscalValor total do estoque',
            'format' => ''
        ],
        'NR_SAT' => [
            'type' => 'numeric',
            'regex' => '^([0-9]{9})+$',
            'required' => true,
            'info' => 'Número de Série do equipamento SAT',
            'format' => ''
        ],
        'CHV_CFE' => [
            'type' => 'numeric',
            'regex' => '^([0-9]{44})?$',
            'required' => false,
            'info' => 'Chave do Cupom Fiscal Eletrônico',
            'format' => ''
        ],
        'NUM_CFE' => [
            'type' => 'numeric',
            'regex' => '^([0-9]{6})?$',
            'required' => false,
            'info' => 'Número do Cupom Fiscal Eletrônico',
            'format' => ''
        ],
        'DT_DOC' => [
            'type' => 'string',
            'regex' => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => false,
            'info' => 'Data da emissão do documento fiscal',
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
        $this->postValidation();
    }


    public function postValidation()
    {
        /**
         * Verifica a chave do cupom fiscal eletronico
         */
        if (!empty($this->std->chv_cfe) and !Keys::isValid($this->std->chv_cfe)) {
            throw new \InvalidArgumentException("[" . self::REG . "] " .
                " Dígito verificador incorreto no campo campo chave do " .
                "cupom fiscal eletronico (CHV_CFE)");
        }

        return true;
    }
}
