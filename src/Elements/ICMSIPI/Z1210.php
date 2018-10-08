<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class Z1210 extends Element implements ElementInterface
{
    const REG = '1210';
    const LEVEL = 3;
    const PARENT = '1200';

    protected $parameters = [
        'TIPO_UTIL' => [
            'type'     => 'string',
            'regex'    => '^.{4}$',
            'required' => true,
            'info'     => 'Tipo de utilização do crédito, conforme tabela indicada no item 5.5.',
            'format'   => ''
        ],
        'NR_DOC' => [
            'type'     => 'string',
            'regex'    => '^.*$',
            'required' => false,
            'info'     => 'Número do documento utilizado na baixa de créditos',
            'format'   => ''
        ],
        'VL_CRED_UTIL' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Total de crédito utilizado',
            'format'   => '15v2'
        ],
        'CHV_DOCE' => [
            'type'     => 'string',
            'regex'    => '^\d{44}$',
            'required' => false,
            'info'     => 'Chave do Documento Eletrônico',
            'format'   => ''
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

    public function postValidation()
    {
        /*
         * Campo 04 (VL_CRED_UTIL) Validação: o valor informado no campo deve ser maior que “0” (zero).
         */
        if ($this->values->vl_cred_util <= 0) {
            throw new \InvalidArgumentException("[" . self::REG . "] O valor informado no campo VL_CRED_UTIL deve ser maior que “0” (zero).");
        }
    }
}
