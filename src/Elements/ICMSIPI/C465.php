<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\Common\Keys;
use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class C465 extends Element implements ElementInterface
{
    const REG = 'C465';
    const LEVEL = 5;
    const PARENT = 'C460';

    protected $parameters = [
        'CHV_CFE' => [
            'type' => 'numeric',
            'regex' => '^([0-9]{44})?$',
            'required' => true,
            'info' => 'Chave do Cupom Fiscal Eletrônico',
            'format' => ''
        ],
        'NUM_CCF' => [
            'type' => 'numeric',
            'regex' => '^(\d{1,9})$',
            'required' => true,
            'info' => 'Número do Contador de Cupom Fiscal',
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
         * Verifica a chave cfe
         */
        if ($this->std->chv_cfe and !Keys::isValid($this->std->chv_cfe)) {
            throw new \InvalidArgumentException("[" . self::REG . "] " .
                " Dígito verificador incorreto no da Chave " .
                "do Cupom Fiscal Eletrônico (CHV_CFE)");
        }
    }
}
