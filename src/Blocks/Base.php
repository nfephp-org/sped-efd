<?php

namespace NFePHP\EFD\Blocks;

/**
 * Classe abstrata basica de onde cada bloco é cunstruido
 */
abstract class Base
{
    public $elements = [];
    protected $bloco = '';
    
    public function __construct()
    {
        
    }
    
    /**
     * Call classes to build each EFD element
     * @param string $name
     * @param array $arguments [std]
     * @return object|array
     * @throws \Exception
     */
    public function __call($name, $arguments)
    {
        $name = str_replace('-', '', strtolower($name));
        $realname = $name;
        if (!array_key_exists($realname, $this->elements)) {
            throw new \Exception("Não encontrada referencia ao método $name.");
        }
        $className = $this->elements[$realname]['class'];
        if (empty($arguments[0])) {
            throw new \Exception("Sem dados passados para o método [$name].");
        }
        
        $elclass = new $className($arguments[0]);
        //aqui deve ser feita a construção do bloco
        //para fazer a montagem verificar o elemento pai
        //se não existir elemento pai no bloco disparar um exception
        
        $this->bloco .= "{$elclass}\n";
    }
    
    /**
     * Totalizes the elements of the block and returns the complete block
     * in a string adding element 0990
     * @return string
     */
    public function get()
    {
        //fazer a montagem do elemento 0990 Totalizador
        $n = count(explode("\n", $this->bloco));
        $this->bloco .= "|0990|$n|\n";
        return $this->bloco;
    }
}
