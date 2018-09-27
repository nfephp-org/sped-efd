<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

/**
 * REGISTRO C300: RESUMO DIÁRIO DAS NOTAS FISCAIS DE VENDA A CONSUMIDOR (CÓDIGO 02)
 * Este registro deve ser apresentado pelos contribuintes que utilizam notas fiscais de venda ao consumidor, não
 * emitidas por ECF. Trata-se de um resumo diário, por série e subsérie do documento fiscal, de todas as operações praticadas.
 * Existirão tantos registros C300 quantos forem os agrupamentos de séries e subséries dos documentos fiscais emitidos no dia.
 * Os valores de documentos fiscais cancelados não devem ser computados no valor total dos documentos (campo VL_DOC).
 * @package NFePHP\EFD\Elements\ICMSIPI
 */
class C300 extends Element implements ElementInterface
{
    const REG = 'C300';
    const LEVEL = 2;
    const PARENT = 'C001';

    protected $parameters = [
        'COD_MOD' => [
            'type' => 'string',
            'regex' => '^.{2}$',
            'required' => false,
            'info' => 'Código do modelo do documento fiscal, conforme a Tabela 4.1.1',
            'format' => ''
        ],
        'SER' => [
            'type' => 'string',
            'regex' => '^.{0,4}$',
            'required' => false,
            'info' => 'Série do documento fiscal',
            'format' => ''
        ],
        'SUB' => [
            'type' => 'string',
            'regex' => '^.{0,3}$',
            'required' => false,
            'info' => 'Subsérie do documento fiscal',
            'format' => ''
        ],
        'NUM_DOC_INI' => [
            'type' => 'numeric',
            'regex' => '^([1-9]{1})(\d{1,5})?$',
            'required' => false,
            'info' => 'Número do documento fiscal inicial',
            'format' => ''
        ],
        'NUM_DOC_FIN' => [
            'type' => 'numeric',
            'regex' => '^([1-9]{1})(\d{1,5})?$',
            'required' => false,
            'info' => 'Número do documento fiscal final',
            'format' => ''
        ],
        'DT_DOC' => [
            'type' => 'string',
            'regex' => '^(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))(0[1-9]|1[0-2])([12]\d{3})$',
            'required' => false,
            'info' => 'Data da emissão dos documentos fiscais',
            'format' => ''
        ],
        'VL_DOC' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor total dos documentos',
            'format' => '15v2'
        ],
        'VL_PIS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor total do PIS',
            'format' => '15v2'
        ],
        'VL_COFINS' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor total da COFINS',
            'format' => '15v2'
        ],
        'COD_CTA' => [
            'type' => 'string',
            'regex' => '^(.*)$',
            'required' => false,
            'info' => 'Código da conta analítica contábil debitada/creditada',
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
