<?php

namespace NFePHP\EFD\Blocos\Producao;

/*
 * REGISTRO K255: INDUSTRIALIZAÇÃO EM TERCEIROS – INSUMOS CONSUMIDOS
 */

use NFePHP\EFD\Blocos\Basic\BlocoAbstract;

class IndustrializacaoInsumos extends BlocoAbstract
{
    /**
     * Data do reconhecimento do consumo ddmmaaaa
     * @var string
     */
    protected $dtConsumo;
    /**
     * Codigo do insumo consumido pelo terceiro 60 caracteres ASCII
     * @var string
     */
    protected $insumo;
    /**
     * Quantidade consumida 3 decimais apos virgula
     * @var string
     */
    protected $qtd;
    /**
     * Codigo do insumo substituido
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
        return "|K255|$this->dtConsumo|$this->insumo|$this->qtd|$this->insumoSubstituido|";
    }
}
