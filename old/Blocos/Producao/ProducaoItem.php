<?php

namespace NFePHP\EFD\Blocos\Producao;

/**
 * REGISTRO K230: ITENS PRODUZIDOS
 */

use NFePHP\EFD\Blocos\Basic\BlocoAbstract;

class ProducaoItem extends BlocoAbstract
{
    /**
     * Data inicio da produção ddmmaaaa
     * @var string
     */
    protected $dtIniOp;
    /**
     * Data de encerramento da OP ddmmaaaa
     * @var string
     */
    protected $dtFimOp;
    /**
     * Numero de identificação da OP max 30 caracteres ASCII
     * @var string
     */
    protected $numOp;
    /**
     * Código do item produzido max 60 caracteres ASCII
     * @var string
     */
    protected $codigoItem;
    /**
     * Quantidade Produzida 3 digitos depois da virgula
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
        return "|K230|$this->dtIniOp|$this->dtFimOp|$this->numOp|$this->codigoItem|$this->qtd|";
    }
}
