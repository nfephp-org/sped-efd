<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class B420 extends Element implements ElementInterface
{
    const REG = 'B420';
    const LEVEL = 2;
    const PARENT = 'B001';

    protected $parameters = [
        'VL_CONT' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Totalização do Valor Contábil das prestações do declarante '
            .'referente à combinação da alíquota e item da lista',
            'format'   => '15v2'
        ],
        'VL_BC_ISS' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Totalização do Valor da base de cálculo do ISS das prestações '
            .'do declarante referente à combinação da alíquota e item da lista',
            'format'   => '15v2'
        ],
        'ALIQ_ISS' => [
            'type'     => 'integer',
            'regex'    => '^[0-5]{1}$',
            'required' => true,
            'info'     => 'Alíquota do ISS',
            'format'   => ''
        ],
        'VL_ISNT_ISS' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Totalização do valor das operações isentas ou não-tributadas pelo '
            .'ISS referente à combinação da alíquota e item da lista',
            'format'   => '15v2'
        ],
        'VL_ISS' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info'     => 'Totalização, por combinação da alíquota e item da lista, do Valor do ISS',
            'format'   => '15v2'
        ],
        'COD_SERV' => [
            'type'     => 'string',
            'regex'    => '^.*$',
            'required' => true,
            'info'     => 'Item da lista de serviços, conforme Tabela 4.6.3.',
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
    }
}
