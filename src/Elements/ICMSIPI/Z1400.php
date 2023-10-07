<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use stdClass;

class Z1400 extends Element
{
    const REG = '1400';
    const LEVEL = 2;
    const PARENT = '1001';

    protected $parameters = [
        'COD_ITEM_IPM' => [
            'type'     => 'string',
            'regex'    => '^.{1,60}$',
            'required' => true,
            'info'     => 'Código do item (Tabela própria da unidade da federação '
            .'(Tabela de Itens UF Índice de Participação dos Municípios) '
            .'ou campo 02 do Registro 0200',
            'format'   => ''
        ],
        'MUN' => [
            'type'     => 'integer',
            'regex'    => '^\d{7}$',
            'required' => true,
            'info'     => 'Código do Município de origem/destino',
            'format'   => ''
        ],
        'VALOR' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Valor mensal correspondente ao município',
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

    public function postValidation()
    {
        /*
         * Campo 04 (VALOR) Validação: o valor informado no campo deve ser maior que “0” (zero).
         * Se o valor for negativo ou zero, o contribuinte não deve prestar a informação no mês.
         */
        if ($this->values->valor <= 0) {
            $this->errors[] = "[" . self::REG . "] Se o valor for negativo ou "
            ."zero, o contribuinte não deve prestar a informação no mês.";
        }
    }
}
