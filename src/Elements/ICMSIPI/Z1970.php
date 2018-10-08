<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class Z1970 extends Element implements ElementInterface
{
    const REG = '1970';
    const LEVEL = 2;
    const PARENT = '1001';

    protected $parameters = [
        'IND_AP' => [
            'type'     => 'integer',
            'regex'    => '^\d{2}$',
            'required' => true,
            'info'     => 'Indicador da sub-apuração por tipo de benefício (conforme tabela 4.7.1)',
            'format'   => ''
        ],
        'G3_01' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Importações com ICMS diferido',
            'format'   => '15v2'
        ],
        'G3_02' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'ICMS diferido nas importações',
            'format'   => '15v2'
        ],
        'G3_03' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Saídas não incentivadas de PI',
            'format'   => '15v2'
        ],
        'G3_04' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Percentual de incentivo nas saídas para fora do Estado',
            'format'   => '15v2'
        ],
        'G3_05' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Saídas incentivadas de PI para fora do Estado',
            'format'   => '15v2'
        ],
        'G3_06' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'ICMS das saídas incentivadas de PI para fora do Estado',
            'format'   => '15v2'
        ],
        'G3_07' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Crédito presumido nas saídas para fora do Estado.',
            'format'   => '15v2'
        ],
        'G3_T' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Dedução de incentivo da Importação (crédito presumido)',
            'format'   => '15v2'
        ],
        'G3_08' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Saldo devedor do ICMS antes das deduções do incentivo',
            'format'   => '15v2'
        ],
        'G3_09' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Saldo devedor do ICMS após deduções do incentivo',
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
    }
}
