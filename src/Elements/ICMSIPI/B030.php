<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use stdClass;

class B030 extends Element
{
    const REG = 'B030';
    const LEVEL = 2;
    const PARENT = 'B001';

    protected $parameters = [
        'COD_MOD' => [
            'type'     => 'string',
            'regex'    => '^.{2}$',
            'required' => true,
            'info'     => 'Código do modelo do documento fiscal, conforme a Tabela 4.1.3',
            'format'   => ''
        ],
        'SER' => [
            'type'     => 'string',
            'regex'    => '^.{1,3}$',
            'required' => false,
            'info'     => 'Série do documento fiscal',
            'format'   => ''
        ],
        'NUM_DOC_INI' => [
            'type'     => 'integer',
            'regex'    => '^([1-9])([0-9]{1,8}|)$',
            'required' => true,
            'info'     => 'Número do primeiro documento fiscal emitido no dia',
            'format'   => ''
        ],
        'NUM_DOC_FIN' => [
            'type'     => 'integer',
            'regex'    => '^\d{1,9}$',
            'required' => true,
            'info'     => 'Número do último documento fiscal emitido no dia',
            'format'   => ''
        ],
        'DT_DOC' => [
            'type'     => 'integer',
            'regex'    => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => true,
            'info'     => 'Data da emissão dos documentos fiscais',
            'format'   => ''
        ],
        'QTD_CANC' => [
            'type'     => 'integer',
            'regex'    => '^\d+$',
            'required' => true,
            'info'     => 'Quantidade de documentos cancelados',
            'format'   => ''
        ],
        'VL_CONT' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor contábil (valor total acumulado dos documentos)',
            'format'   => '15v2'
        ],
        'VL_ISNT_ISS' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor acumulado das operações isentas ou não-tributadas pelo ISS',
            'format'   => '15v2'
        ],
        'VL_BC_ISS' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor acumulado da base de cálculo do ISS',
            'format'   => '15v2'
        ],
        'VL_ISS' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor acumulado do ISS destacado',
            'format'   => '15v2'
        ],
        'COD_INF_OBS' => [
            'type'     => 'string',
            'regex'    => '^.{1,60}$',
            'required' => false,
            'info'     => 'Código da observação do lançamento fiscal (campo 02 do Registro 0460)',
            'format'   => ''
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
         * Campo 05 (NUM_DOC_FIN) Validação: o valor tem de ser maior ou igual ao
         * valor informado no campo NUM_DOC_INI.
         */
        if ($this->std->num_doc_fin < $this->std->num_doc_ini) {
            $this->errors[] = "[" . self::REG . "] O valor informado no campo NUM_DOC_FIN "
            ."tem de ser maior ou igual ao valor informado no campo NUM_DOC_INI.";
        }
    }
}
