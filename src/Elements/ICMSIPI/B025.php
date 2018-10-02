<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class B025 extends Element implements ElementInterface
{
    const REG = 'B025';
    const LEVEL = 3;
    const PARENT = 'B020';

    protected $parameters = [
        'VL_CONT_P' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Parcela correspondente ao "Valor Contábil" referente à combinação da '
            .'alíquota e item da lista',
            'format'   => '15v2'
        ],
        'VL_BC_ISS_P' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Parcela correspondente ao "Valor da base de cálculo do ISS" referente à '
            .'combinação da alíquota e item da lista',
            'format'   => '15v2'
        ],
        'ALIQ_ISS' => [
            'type'     => 'integer',
            'regex'    => '^[0-5]{1}$',
            'required' => true,
            'info'     => 'Alíquota do ISS',
            'format'   => ''
        ],
        'VL_ISS_P' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Parcela correspondente ao "Valor do ISS" referente à combinação da alíquota '
            .'e item da lista',
            'format'   => '15v2'
        ],
        'VL_ISNT_ISS_P' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Parcela correspondente ao "Valor das operações isentas ou não- tributadas pelo '
            .'ISS" referente à combinação da alíquota e item da lista',
            'format'   => '15v2'
        ],
        'COD_SERV' => [
            'type'     => 'string',
            'regex'    => '^.{4}$',
            'required' => true,
            'info'     => 'Item da lista de serviços, conforme Tabela 4.6.3',
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
         * Campo 05 (VL_ISS_P) Validação: O valor deve ser igual ao produto
         * da base de cálculo “VL_BC_ISS_P” pela alíquota “ALIQ_ISS”.
         */
        $vl_iss_p = ($this->values->vl_bc_iss_p/100) * $this->std->aliq_iss;
        $vl_iss_p = (float) number_format((float) $vl_iss_p, 2, '.', '');
        
        if ($this->values->vl_iss_p != $vl_iss_p) {
            throw new \InvalidArgumentException("[" . self::REG . "] O valor informado no campo “VL_ISS_P” "
            ."deve ser igual ao produto da base de cálculo “VL_BC_ISS_P” pela alíquota “ALIQ_ISS”.");
        }
    }
}
