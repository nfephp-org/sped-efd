<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use stdClass;

class G140 extends Element
{
    const REG = 'G140';
    const LEVEL = 5;
    const PARENT = 'G100';

    protected $parameters = [
        'NUM_ITEM' => [
            'type' => 'numeric',
            'regex' => '^(\d{1,3})$',
            'required' => true,
            'info' => 'Número sequencial do item no documento fiscal ',
            'format' => ''
        ],
        'COD_ITEM' => [
            'type' => 'string',
            'regex' => '^.{1,60}$',
            'required' => true,
            'info' => 'Código correspondente do bem no documento fiscal (campo 02 do registro 0200) ',
            'format' => ''
        ],
        'QTDE' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Quantidade, deste item da nota fiscal, que foi aplicada neste bem, expressa na mesma '
            .'unidade constante no documento fiscal de entrada',
            'format'   => '15v5'
        ],
        'UNID' => [
            'type'     => 'string',
            'regex'    => '^[0-9]{6}$',
            'required' => true,
            'info'     => 'Unidade do item constante no documento fiscal de entrada',
            'format'   => ''
        ],
        'VL_ICMS_OP_APLICADO' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor do ICMS da Operação Própria na entrada do item, proporcional à quantidade aplicada '
            .'no bem ou componente.',
            'format'   => '15v2'
        ],
        'VL_ICMS_ST_APLICADO' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor do ICMS ST na entrada do item, proporcional à quantidade aplicada no bem ou '
            .'componente.',
            'format'   => '15v2'
        ],
        'VL_ICMS_FRT_APLICADO' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor do ICMS sobre Frete do Conhecimento de Transporte na entrada do item, '
            .'proporcional à quantidade aplicada no bem ou componente.',
            'format'   => '15v2'
        ],
        'VL_ICMS_DIF_APLICADO' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor do ICMS Diferencial de Alíquota, na entrada do item, proporcional à quantidade '
            .'aplicada no bem ou componente.',
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
