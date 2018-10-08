<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class Z1975 extends Element implements ElementInterface
{
    const REG = '1975';
    const LEVEL = 3;
    const PARENT = '1970';

    protected $parameters = [
        'ALIQ_IMP_BASE' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Alíquota incidente sobre as importações-base',
            'format'   => '15v2'
        ],
        'G3_10' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Saídas incentivadas de PI',
            'format'   => '15v2'
        ],
        'G3_11' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Importações-base para o crédito presumido',
            'format'   => '15v2'
        ],
        'G3_12' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Crédito presumido nas saídas internas',
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
