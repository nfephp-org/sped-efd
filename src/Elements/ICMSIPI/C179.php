<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

/**
 * REGISTRO C179: INFORMAÇÕES COMPLEMENTARES ST (CÓDIGO 01)
 * Este registro tem por objetivo informar operações que envolvam repasse, dedução e complemento de ICMS_ST nas
 * operações interestaduais e nas operações com substituído intermediário.
 * @package NFePHP\EFD\Elements\ICMSIPI
 */
class C179 extends Element implements ElementInterface
{
    const REG = 'C179';
    const LEVEL = 4;
    const PARENT = 'C170';

    protected $parameters = [
        'BC_ST_ORIG_DEST' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor da base de cálculo ST na origem/destino em operações interestaduais.',
            'format' => '15v2'
        ],
        'ICMS_ST_REP' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor do ICMS-ST a repassar/deduzir em operações interestaduais',
            'format' => '15v2'
        ],
        'ICMS_ST_COMPL' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor do ICMS-ST a complementar à UF de destino',
            'format' => '15v2'
        ],
        'BC_RET' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor da BC de retenção em remessa promovida por Substituído intermediário',
            'format' => '15v2'
        ],
        'ICMS_RET' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor da parcela do imposto retido em remessa promovida por substituído intermediário',
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
