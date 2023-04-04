<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use stdClass;

/**
 * REGISTRO C171: ARMAZENAMENTO DE COMBUSTÍVEIS (código 01, 55).
 * Este registro deve ser apresentado pelas empresas do comércio varejista de combustíveis, somente nas operações de
 * entrada, para informar o volume recebido (em litros), por item do documento fiscal, conforme Livro de Movimentação de
 * Combustíveis (LMC), Ajuste SINIEF 01/92.
 * @package NFePHP\EFD\Elements\ICMSIPI
 */
class C171 extends Element
{
    const REG = 'C171';
    const LEVEL = 4;
    const PARENT = 'C171';

    protected $parameters = [
        'NUM_TANQUE' => [
            'type' => 'string',
            'regex' => '^.{1,3}$',
            'required' => true,
            'info' => 'Tanque onde foi armazenado o combustível',
            'format' => ''
        ],
        'QTDE' => [
            'type' => 'numeric',
            'regex' => '\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Quantidade ou volume armazenado',
            'format' => '15v3'
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
