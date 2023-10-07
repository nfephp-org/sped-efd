<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use stdClass;

class B440 extends Element
{
    const REG = 'B440';
    const LEVEL = 2;
    const PARENT = 'B001';

    protected $parameters = [
        'IND_OPER' => [
            'type'     => 'integer',
            'regex'    => '^[0|1]$',
            'required' => true,
            'info'     => 'Indicador do tipo de operação: '
            .'0- Aquisição; '
            .'1- Prestação',
            'format'   => ''
        ],
        'COD_PART' => [
            'type'     => 'string',
            'regex'    => '^.{1,60}$',
            'required' => true,
            'info'     => 'Código do participante (campo 02 do Registro 0150): '
            .'- do prestador, no caso de aquisição de serviço pelo declarante; '
            .'- do tomador, no caso de prestação de serviço pelo declarante',
            'format'   => ''
        ],
        'VL_CONT_RT' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Totalização do Valor Contábil das prestações e/ou aquisições do declarante pela '
            .'combinação de tipo de operação e participante.',
            'format'   => '15v2'
        ],
        'VL_BC_ISS_RT' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Totalização do Valor da base de cálculo de retenção do ISS das prestações e/ou '
            .'aquisições do declarante pela combinação de tipo de operação e participante.',
            'format'   => '15v2'
        ],
        'VL_ISS_RT' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Totalização do Valor do ISS retido pelo tomador das prestações e/ou aquisições do '
            .'declarante pela combinação de tipo de operação e participante.',
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
}
