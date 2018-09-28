<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class C460 extends Element implements ElementInterface
{
    const REG = 'C460';
    const LEVEL = 4;
    const PARENT = 'C400';

    protected $parameters = [
        'COD_MOD' => [
            'type' => 'string',
            'regex' => '^(02|2D|60)$',
            'required' => true,
            'info' => 'Código do modelo do documento fiscal',
            'format' => ''
        ],
        'COD_SIT' => [
            'type' => 'numeric',
            'regex' => '^(00|01|02)$',
            'required' => true,
            'info' => 'Código da situação do documento fiscal',
            'format' => ''
        ],
        'NUM_DOC' => [
            'type' => 'numeric',
            'regex' => '^([1-9]{1})(\d{1,8})?$',
            'required' => true,
            'info' => 'Número do documento fiscal (COO)',
            'format' => ''
        ],
        'DT_DOC' => [
            'type' => 'string',
            'regex' => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => true,
            'info' => 'Data da emissão do documento fiscal',
            'format' => ''
        ],
        'VL_DOC' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Valor total do documento fiscal',
            'format' => '15v2'
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
        'CPF_CNPJ' => [
            'type' => 'string',
            'regex' => '^([0-9]{11}|[0-9]{14})$',
            'required' => false,
            'info' => 'CPF ou CNPJ do adquirente',
            'format' => ''
        ],
        'NOM_ADQ' => [
            'type' => 'string',
            'regex' => '^.{0,60}$',
            'required' => false,
            'info' => 'Nome do adquirente',
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

    public function postValidation()
    {
        if ($this->values->vl_doc <= 0) {
            throw new \InvalidArgumentException("[" . self::REG . "] " .
                " O Valor totao do documento fiscal " .
                "(VL_DOC) deve ser maior que 0");
        }
    }
}
