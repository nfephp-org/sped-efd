<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class B470 extends Element implements ElementInterface
{
    const REG = 'B470';
    const LEVEL = 2;
    const PARENT = 'B001';

    protected $parameters = [
        'VL_CONT' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'A- Valor total referente às prestações de serviço do período',
            'format'   => '15v2'
        ],
        'VL_MAT_TERC' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'B- Valor total do material fornecido por terceiros na prestação do serviço',
            'format'   => '15v2'
        ],
        'VL_MAT_PROP' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'C- Valor do material próprio utilizado na prestação do serviço',
            'format'   => '15v2'
        ],
        'VL_SUB' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'D- Valor total das subempreitadas',
            'format'   => '15v2'
        ],
        'VL_ISNT' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'E- Valor total das operações isentas ou não-tributadas pelo ISS',
            'format'   => '15v2'
        ],
        'VL_DED_BC' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'F- Valor total das deduções da base de cálculo (B + C + D + E)',
            'format'   => '15v2'
        ],
        'VL_BC_ISS' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'G- Valor total da base de cálculo do ISS',
            'format'   => '15v2'
        ],
        'VL_BC_ISS_RT' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'H- Valor total da base de cálculo de retenção do ISS referente'
            .'às prestações do declarante.',
            'format'   => '15v2'
        ],
        'VL_ISS' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'I- Valor total do ISS destacado',
            'format'   => '15v2'
        ],
        'VL_ISS_RT' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'J- Valor total do ISS retido pelo tomador nas prestações do declarante',
            'format'   => '15v2'
        ],
        'VL_DED' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'K- Valor total das deduções do ISS próprio',
            'format'   => '15v2'
        ],
        'VL_ISS_REC' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'L- Valor total apurado do ISS próprio a recolher (I - J - K)',
            'format'   => '15v2'
        ],
        'VL_ISS_ST' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'M- Valor total do ISS substituto a recolher pelas aquisições do declarante (tomador)',
            'format'   => '15v2'
        ],
        'VL_ISS_REC_UNI' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'N- Valor do ISS próprio a recolher pela Sociedade Uniprofissional',
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
         * Campo 07 (VL_DED_BC) Validação: o valor informado deve ser igual ao somatório dos valores
         * dos campos VL_MAT_TERC, VL_MAT_PROP, VL_SUB e VL_ISNT.
         */
        $somatorio = $this->values->vl_mat_terc
                    + $this->values->vl_mat_prop
                    + $this->values->vl_sub
                    + $this->values->vl_isnt;
        if ($this->values->vl_ded_bc != $somatorio) {
            $this->errors[] = "[" . self::REG . "] O valor informado deve ser igual "
            ."ao somatório dos valores dos campos VL_MAT_TERC, VL_MAT_PROP, VL_SUB e VL_ISNT.";
        }
    }
}
