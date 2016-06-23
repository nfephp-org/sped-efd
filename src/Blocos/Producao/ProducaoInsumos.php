<?php

namespace NFePHP\EFD\Blocos\Producao;

/*
 * REGISTRO K235: INSUMOS CONSUMIDOS
 */

use NFePHP\EFD\Blocos\Basic\BlocoAbstract;

class ProducaoInsumos extends BlocoAbstract
{
    /**
     * Data do efetivo consumo do insumo ddmmaaaa
     * @var string
     */
    protected $dtSaida;
    /**
     * Codigo do insumo utilizado max 60 caracteres ASCII
     * @var string
     */
    protected $insumo;
    /**
     * Quantidade consumida 3 digitos depois da virgula
     * @var string
     */
    protected $qtd;
    /**
     * Codigo do insumo original contido na estrutura do produto 60 caracteres ASCII
     * @var string
     */
    protected $insumoSubstituido;
    
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
        return "|K235|$this->dtSaida|$this->insumo|$this->qtd|$this->insumoSubstituido|";
    }
}
