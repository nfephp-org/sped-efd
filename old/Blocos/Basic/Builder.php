<?php

namespace NFePHP\EFD\Blocos\Basic;

/**
 * Esta classe busca a classe referente a estrutura
 * estabelecida pelo método chamador e
 * carrega a classe e suas propriedades
 */

class Builder
{
    
    private $params;
    protected $group;

    /**
     * Carrega os parametros da classe
     *
     * @param array $params
     * @return \NFePHP\EFD\Blocos\Builder
     */
    public function params($params = null)
    {
        $this->params = $params;
        return $this;
    }
    
    public function subGroup($group = null)
    {
        $this->group = $group;
        return $this;
    }
    
    /**
     * Chamador da classe construtora da estrutura
     *
     * @param string $method
     * @return type
     */
    public function call($method)
    {
        $object = $this->group.'\\'.ucfirst($method);
        return call_user_func_array([new $object, 'get'], [$this->params]);
    }
}
