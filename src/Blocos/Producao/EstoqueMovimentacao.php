<?php

namespace NFePHP\EFD\Blocos\Producao;

/**
 * REGISTRO K220: OUTRAS MOVIMENTAÇÕES INTERNAS ENTRE MERCADORIAS
 */

use NFePHP\EFD\Blocos\Basic\BlocoAbstract;

class EstoqueMovimentacao extends BlocoAbstract
{
    /**
     * Data da movimentação ddmmaaaa
     * @var string
     */
    protected $dtMov;
    /**
     * Codigo original do item
     * @var string
     */
    protected $codigoOrigem;
    /**
     * Codigo Reclassificado do Item
     * @var string
     */
    protected $codigoDestino;
    /**
     * Quantidade com 3 decimais separados por virgula
     * @var string
     */
    protected $qtd;
    
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
        return "|K220|$this->dtMov|$this->codigoOrigem|$this->codigoDestino|$this->qtd|";
    }
}
