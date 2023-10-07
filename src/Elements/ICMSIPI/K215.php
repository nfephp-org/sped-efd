<?php

namespace NFePHP\EFD\Elements\ICMSIPI;

use NFePHP\EFD\Common\Element;
use stdClass;

/**
 * REGISTRO K215: DESMONTAGEM DE MERCADORIAS – ITENS DE DESTINO
 * Este registro tem o objetivo de escriturar a desmontagem (com ou
 * sem ordem de serviço) de mercadorias de tipos:
 * 00 – Mercadoria para revenda;
 * 01 – Matéria-Prima;
 * 02 – Embalagem;
 * 03 – Produtos em Processo;
 * 04 – Produto Acabado;
 * 05 – Subproduto
 * e 10 – Outros Insumos – campo TIPO_ITEM do Registro 0200, no que se refere
 * à entrada em estoque do item de destino.
 * Este registro é obrigatório caso exista o registro-pai K210
 * e o controle  da  desmontagem não for por ordem de serviço
 * (campos DT_INI_OS, DT_FIN_OS e COD_DOC_OS do Registro K210 em branco).
 *  Nesse caso, a saída do estoque do item de origem e a entrada em estoque
 * do item de destino têm que ocorrer no período de apuração do Registro K100.
 *  Quando o controle da desmontagem for por ordem de serviço, deverá existir
 * o Registro K215 até o encerramento da ordem de serviço, que poderá ocorrer
 * em outro período de apuração.
 * A quantidade deve ser expressa, obrigatoriamente, na unidade de medida
 * de controle de estoque constante no campo 06 do registro 0200, UNID_INV.
 * Validação do Registro: A chave deste registro é o campo COD_ITEM_DES.
 */
class K215 extends Element
{
    const REG = 'K215';
    const LEVEL = 4;
    const PARENT = 'K210';

    protected $parameters = [
        'COD_ITEM_DES' => [
            'type'     => 'string',
            'regex'    => '^.{1,60}$',
            'required' => true,
            'info'     => 'Código do item de destino (campo 02 do Registro 0200)',
            'format'   => ''
        ],
        'QTD_DES' => [
            'type'     => 'numeric',
            'regex'    => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info'     => 'Quantidade de destino – entrada em estoque',
            'format'   => '15v6'
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
