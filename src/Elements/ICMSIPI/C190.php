<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use stdClass;

/**
 * REGISTRO C190: REGISTRO ANALÍTICO DO DOCUMENTO (CÓDIGO 01, 1B, 04, 55 e 65)
 * Este registro tem por objetivo representar a escrituração dos documentos fiscais totalizados por CST, CFOP e
 * Alíquota de ICMS.
 * @package NFePHP\EFD\Elements\ICMSIPI
 */
class C190 extends Element
{
    const REG = 'C190';
    const LEVEL = 3;
    const PARENT = 'C100';

    protected $parameters = [
        'CST_ICMS' => [
            'type' => 'numeric',
            'regex' => '^(\d{3})$',
            'required' => true,
            'info' => 'Código da Situação Tributária',
            'format' => ''
        ],
        'CFOP' => [
            'type' => 'numeric',
            'regex' => '^(\d{4})$',
            'required' => true,
            'info' => 'Código Fiscal de Operação e Prestação do agrupamento de itens',
            'format' => ''
        ],
        'ALIQ_ICMS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Alíquota do ICMS',
            'format' => '6v2'
        ],
        'VL_OPR' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Valor da operação na combinação de CST_ICMS, CFOP e alíquota do ICMS',
            'format' => '15v2'
        ],
        'VL_BC_ICMS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Parcela correspondente ao "Valor da base de cálculo do ICMS" referente à
            combinação de CST_ICMS, CFOP e alíquota do ICMS.',
            'format' => '15v2'
        ],
        'VL_ICMS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Parcela correspondente ao "Valor do ICMS", incluindo o FCP, quando aplicável,
            referente à combinação de CST_ICMS, CFOP e alíquota doICMS.',
            'format' => '15v2'
        ],
        'VL_BC_ICMS_ST' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Parcela correspondente ao "Valor da base de cálculo do ICMS" da substituição
            tributária referente à combinação de CST_ICMS, CFOP e alíquota do ICMS.',
            'format' => '15v2'
        ],
        'VL_ICMS_ST' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Parcela correspondente ao valor creditado/debitado do ICMS da substituição
                        tributária, incluindo o FCP_ ST, quando aplicável, referente à
                        combinação de CST_ICMS, CFOP, e alíquota do ICMS.',
            'format' => '15v2'
        ],
        'VL_RED_BC' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Valor não tributado em função da redução da base de cálculo do ICMS,
            referente à combinação de CST_ICMS, CFOP e alíquota do ICMS.',
            'format' => '15v2'
        ],
        'VL_IPI' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Parcela correspondente ao "Valor do IPI" referente à combinação
            CST_ICMS, CFOP e alíquota do ICMS.',
            'format' => '15v2'
        ],
        'COD_OBS' => [
            'type' => 'string',
            'regex' => '^.{0,6}$',
            'required' => false,
            'info' => 'Código da observação do lançamento fiscal',
            'format' => ''
        ],
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
