<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use stdClass;

class Z1320 extends Element
{
    const REG = '1320';
    const LEVEL = 4;
    const PARENT = '1310';

    protected $parameters = [
        'NUM_BICO' => [
            'type'     => 'integer',
            'regex'    => '^\d+$',
            'required' => true,
            'info'     => 'Bico Ligado à Bomba',
            'format'   => ''
        ],
        'NR_INTERV' => [
            'type'     => 'integer',
            'regex'    => '^\d+$',
            'required' => false,
            'info'     => 'Número da intervenção',
            'format'   => ''
        ],
        'MOT_INTERV' => [
            'type'     => 'string',
            'regex'    => '^.{1,50}$',
            'required' => false,
            'info'     => 'Motivo da Intervenção',
            'format'   => ''
        ],
        'NOM_INTERV' => [
            'type'     => 'string',
            'regex'    => '^.{1,30}$',
            'required' => false,
            'info'     => 'Nome do Interventor',
            'format'   => ''
        ],
        'CNPJ_INTERV' => [
            'type'     => 'integer',
            'regex'    => '^[0-9]{14}$',
            'required' => false,
            'info'     => 'CNPJ da empresa responsável pela intervenção',
            'format'   => ''
        ],
        'CPF_INTERV' => [
            'type'     => 'integer',
            'regex'    => '^[0-9]{11}$',
            'required' => false,
            'info'     => 'CPF do técnico responsável pela intervenção',
            'format'   => ''
        ],
        'VAL_FECHA' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor da leitura final do contador, no fechamento do bico.',
            'format'   => '15v3'
        ],
        'VAL_ABERT' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor da leitura inicial do contador, na abertura do bico.',
            'format'   => '15v3'
        ],
        'VOL_AFERI' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info'     => 'Aferições da Bomba, em litros',
            'format'   => '15v3'
        ],
        'VOL_VENDAS' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Vendas (08 – 09 - 10 ) do bico , em litros',
            'format'   => '15v3'
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
         * Campo 11 (VOL_VENDAS) Preenchimento: informar o volume de vendas por bico, ligado ao tanque,
         * que corresponde ao valor fornecido no campo VAL_FECHA menos a soma do campo VAL_ABERT com
         * o campo VOL_AFERI.
         */
        $diferenca = $this->values->val_fecha - $this->values->val_abert - $this->values->vol_aferi;
        if ($this->std->vol_vendas != number_format($diferenca, 3, ',', '')) {
            $this->errors[] = "[" . self::REG . "] Informar o volume de vendas por bico, "
            ."ligado ao tanque, que corresponde ao valor fornecido no campo VAL_FECHA menos a soma do campo "
            ."VAL_ABERT com o campo VOL_AFERI.";
        }
    }
}
