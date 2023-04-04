<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use stdClass;

class E311 extends Element
{
    const REG = 'E311';
    const LEVEL = 4;
    const PARENT = 'E310';

    protected $parameters = [
        'COD_AJ_APUR' => [
            'type'     => 'string',
            'regex'    => '^.{1,8}$',
            'required' => true,
            'info'     => 'Código do ajuste da apuração e dedução, conforme a Tabela indicada no item 5.1.1',
            'format'   => ''
        ],
        'DESCR_COMPL_AJ' => [
            'type'     => 'string',
            'regex'    => '^.*$',
            'required' => false,
            'info'     => 'Descrição complementar do ajuste da apuração',
            'format'   => ''
        ],
        'VL_AJ_APUR' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor do ajuste da apuração',
            'format'   => '15v2'
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

    public function postValidation()
    {
        /*
         * Campo 04 (VL_AJ_APUR) Validação: o valor informado no campo deve ser maior que “0” (zero).
         */
        if ($this->values->vl_aj_apur <= 0) {
            $this->errors[] = "[" . self::REG . "] O valor informado no campo deve ser "
            . "maior que “0” (zero).";
        }
    }
}
