<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

/**
 * REGISTRO C120: COMPLEMENTO DE DOCUMENTO - OPERAÇÕES DE IMPORTAÇÃO (CÓDIGOS 01 e 55)
 * Este registro tem por objetivo informar detalhes das operações de importação, que estejam sendo documentadas pela
 * nota fiscal escriturada no registro C100, quando o campo IND_OPER for igual a “0” (zero),
 * indicando operação de entrada.
 * @package NFePHP\EFD\Elements\ICMSIPI
 */
class C120 extends Element implements ElementInterface
{
    const REG = 'C120';
    const LEVEL = 3;
    const PARENT = 'C100';

    protected $parameters = [
        'COD_DOC_IMP' => [
            'type' => 'string',
            'regex' => '^(0|1)+$',
            'required' => true,
            'info' => 'Documento de importação',
            'format' => ''
        ],
        'NUM_DOC_IMP' => [
            'type' => 'string',
            'regex' => '^([0-9]{1,12})+$', // 1-12 (NT 2011/004)
            'required' => true,
            'info' => 'Número do documento de Importação',
            'format' => ''
        ],
        'PIS_IMP' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor pago de PIS na importação',
            'format' => '15v2'
        ],
        'COFINS_IMP' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor pago de COFINS na importação',
            'format' => '15v2'
        ],
        'NUM_ACDRAW' => [
            'type' => 'string',
            'regex' => '^([0-9]{1,20})$',
            'required' => false,
            'info' => 'Número do Ato Concessório do regime Drawback',
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
