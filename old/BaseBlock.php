<?php

namespace NFePHP\EFD\Blocos;

/**
 * Esta classe abstrata estabelece o "contrait" para todas as
 * classes derivadas.
 * Esta classe é de uso genérico pra construir Objetos EFD 
 */
abstract class BaseBlock
{
    /**
     * parametros passados pelo chamador
     * @var array
     */
    protected $params;
    
    /**
     * Retorna a tag já criada e validada
     *
     * @param  array $params
     * @return type
     */
    public function get($params)
    {
        $this->params = $params;
        $this->validate();
        return $this->create();
    }
    
    /**
     * Carrega as propriedades da classe derivada
     * 
     * @param object $origem
     * @return void
     */
    protected function loadProperties($origem)
    {
        foreach($this->params as $key => $param) {
            if (property_exists(get_class($origem), $key)) {
                $this->{$key} = $param;
            }
        }
        unset($this->params);
    }
    
    /**
     * Carrega as propriedades da classe derivada
     * valida os atributos e conteúdo
     * e formata quando necessário
     *
     * @return void
     */
    abstract protected function validate();
    
    /**
     * cria e retorna a estrutura pronta
     * na forma de um objeto de classe
     *
     * @return Object
     */
    abstract protected function create();
    
}
