<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class E220 extends Element implements ElementInterface
{
    const REG = 'E220';
    const LEVEL = 4;
    const PARENT = 'E210';

    protected $parameters = [
        'COD_AJ_APUR' => [
            'type'     => 'string',
            'regex'    => '^.{8}$',
            'required' => true,
            'info'     => 'Código do ajuste da apuração e dedução, '
            .'conforme a Tabela indicada no item 5.1.1',
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
         * Campo 04 (VL_AJ_APUR) Validação: o valor informado no campo deve ser maior que “0” (zero).
         */
        if ($this->values->vl_aj_apur <= 0) {
            throw new \InvalidArgumentException("[" . self::REG . "] O valor informado no campo deve "
            ."ser maior que “0” (zero).");
        }
    }
}
