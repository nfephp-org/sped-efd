<?php

namespace NFePHP\EFD\Blocos\Inventario;

/**
 * REGISTRO H010: INVENTÁRIO.
 */

use NFePHP\EFD\Blocos\Basic\BlocoAbstract;

class Item extends BlocoAbstract
{
    protected $codigo;
    protected $unidade;
    protected $qtd;
    protected $valorUnitario;
    protected $valorItem;
    protected $proprietario;
    protected $participante;
    protected $descricao;
    protected $conta;
    protected $valorIr;
    
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
        return "|H010|$this->codigo|$this->unidade|$this->qtd|"
                . "$this->valorUnitario|$this->valorItem|"
                . "$this->proprietario|$this->participante|"
                . "$this->descricao|$this->conta|$this->valorIr|";
    }
}
