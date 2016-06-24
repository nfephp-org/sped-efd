<?php

namespace NFePHP\EFD\Blocos;

/*
 * BLOCO H: INVENTÁRIO FÍSICO
 * 
 * REGISTRO H001: ABERTURA DO BLOCO H
 * REGISTRO H990: ENCERRAMENTO DO BLOCO H.
 */
use NFePHP\EFD\Blocos\Basic\Factory;
use ArrayObject;

class Inventario extends Factory
{
    /**
     * Array com o conjunto de dados de um bloco
     * @var array
     */
    protected $bloco = null;
    /**
     * Identificação do Bloco a que essa classe pertence
     * @var string
     */
    protected $group = null;
    
    protected $total;
    protected $item;
    protected $informacao;
    
    /**
     * Construtor
     * Instancia as propriedades da classe
     */
    public function __construct()
    {
        $this->bloco = [];
        $this->total = [];
        $this->item = [];
        $this->informacao = [];
        $this->group = get_class();
        parent::__construct();
    }
    
    /**
     * renderiza o bloco
     */
    public function render()
    {
        $nH005 = count($this->total);
        $nH010 = count($this->item);
        $nH020 = count($this->informacao);
        $soma = $nH005 + $nH010 + $nH020;
        //REGISTRO H001: ABERTURA DO BLOCO H
        $indicador = ($soma > 0) ? '1' : '0';
        $this->bloco[] = "|H001|$indicador|";
        $this->bloco = array_merge($this->bloco, $this->total);
        $this->bloco = array_merge($this->bloco, $this->item);
        $this->bloco = array_merge($this->bloco, $this->informacao);
        //REGISTRO H990: ENCERRAMENTO DO BLOCO H
        $this->bloco[] = "|H990|".($soma + 2)."|";
        return $this->bloco;
    }
}
