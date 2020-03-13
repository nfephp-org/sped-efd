<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

/**
 * REGISTRO C597:OUTRAS   OBRIGAÇÕES   TRIBUTÁRIAS,   AJUSTES   E   INFORMAÇÕES   DE   VALORES PROVENIENTES DE DOCUMENTO FISCAL
 * @package NFePHP\EFD\Elements\ICMSIPI
 */
class C597 extends Element implements ElementInterface
{
    const REG = 'C597';
    const LEVEL = 4;
    const PARENT = 'C595';
    
    protected $parameters = [
        'COD_AJ' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{10}$',
            'required' => true,
            'info'     => 'Código do ajustes/benefício/incentivo, conforme tabela indicada no item 5.3.',
            'format'   => ''
        ],
        'DESCR_COMPL_AJ' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{0}$',
            'required' => true,
            'info'     => 'Descrição complementar do ajuste do documento fiscal',
            'format'   => ''
        ],
        'COD_ITEM' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{60}$',
            'required' => true,
            'info'     => 'Código do item (campo 02 do Registro 0200)',
            'format'   => ''
        ],
        'VL_BC_ICMS' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Base de cálculo do ICMS ou do ICMS ST',
            'format'   => '15v2'
        ],
        'ALIQ_ICMS' => [
            'type'     => 'numeric',
            'regex'    => '^[0-9]{6}$',
            'required' => true,
            'info'     => 'Alíquota do ICMS',
            'format'   => ''
        ],
        'VL_ICMS' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor do ICMS ou do ICMS ST',
            'format'   => '15v2'
        ],
        'VL_OUTROS' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Outros valores',
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
