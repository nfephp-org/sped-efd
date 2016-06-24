<?php

namespace NFePHP\EFD\Blocos\Producao;

/*
 * REGISTRO K250: INDUSTRIALIZAÇÃO EFETUADA POR TERCEIROS – ITENS PRODUZIDOS
 */

use NFePHP\EFD\Blocos\Basic\BlocoAbstract;

class IndustrializacaoItem extends BlocoAbstract
{
    /**
     * Data do reconhecimento do recebimento ddmmaaaa
     * @var string
     */
    protected $dtRecebimento;
    /**
     * Codigo do item produzido por terceitos max 60 cadacteres ASCII
     * @var string
     */
    protected $codigoItem;
    /**
     * Qunatidade recebida 3 decimais separação por virgula
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
        return "|K250|$this->dtRecebimento|$this->codigoItem|$this->qtd|";
    }
}
