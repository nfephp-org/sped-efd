<?php

namespace NFePHP\EFD\Blocos\Inventario;

/**
 * REGISTRO H005: TOTAIS DO INVENTÁRIO
 */

use NFePHP\EFD\Blocos\Basic\BlocoAbstract;

class Total extends BlocoAbstract
{
    /**
     * Data do inventario ddmmaaaa
     * @var string
     */
    protected $dtInventario;
    /**
     * Valor total do estoque 2 decimais após virgula
     * @var string
     */
    protected $valor;
    /**
     * Motivo para a realização do inventario
     *  01 – No final no período;
     *  02 – Na mudança de forma de tributação da
     *       mercadoria (ICMS);
     *  03 – Na solicitação da baixa cadastral, paralisação
     *       temporária e outras situações;
     *  04 – Na alteração de regime de pagamento – condição
     *       do contribuinte;
     *  05 – Por determinação dos fiscos.
     * @var string
     */
    protected $motivo;
    
    /**
     * Carga, validação e formatação dos dados
     */
    protected function validate()
    {
        $this->loadProperties($this);
    }
    
    /**
     * Construtor do campo
     * @return string
     */
    protected function create()
    {
        return "|H005|$this->dtInventario|$this->valor|$this->motivo|";
    }
}
