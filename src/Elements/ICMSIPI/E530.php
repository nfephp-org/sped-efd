<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use NFePHP\EFD\Common\ElementInterface;
use \stdClass;

class E530 extends Element implements ElementInterface
{
    const REG = 'E530';
    const LEVEL = 4;
    const PARENT = 'E510';

    protected $parameters = [
        'IND_AJ' => [
            'type'     => 'string',
            'regex'    => '^[0|1]$',
            'required' => true,
            'info'     => 'Indicador do tipo de ajuste: '
            .'0- Ajuste a débito; '
            .'1- Ajuste a crédito',
            'format'   => ''
        ],
        'VL_AJ' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor do ajuste',
            'format'   => '15v2'
        ],
        'COD_AJ' => [
            'type'     => 'string',
            'regex'    => '^.{3}$',
            'required' => true,
            'info'     => 'Código do ajuste da apuração, conforme a Tabela indicada no item 4.5.4.',
            'format'   => ''
        ],
        'IND_DOC' => [
            'type'     => 'string',
            'regex'    => '^[0|1|2|3|9]$',
            'required' => true,
            'info'     => 'Indicador da origem do documento vinculado ao ajuste: '
            .'0 - Processo Judicial; '
            .'1 - Processo Administrativo; '
            .'2 - PER/DCOMP; '
            .'3 – Documento Fiscal '
            .'9 – Outros.',
            'format'   => ''
        ],
        'NUM_DOC' => [
            'type'     => 'string',
            'regex'    => '^.*$',
            'required' => false,
            'info'     => 'Número do documento / processo / declaração ao qual o ajuste está vinculado, se houver',
            'format'   => ''
        ],
        'DESCR_AJ' => [
            'type'     => 'string',
            'regex'    => '^.*$',
            'required' => true,
            'info'     => 'Descrição detalhada do ajuste, com citação dos documentos fiscais.',
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
