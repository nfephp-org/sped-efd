<?php

namespace NFePHP\EFD\Blocks;

abstract class Base
{
    
    protected $elements = [];


    /**
     * Call classes to build each element EFD
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
        $propname = str_replace('tag', '', $name);
        if ($this->elements[$realname]['type'] == 'multiple') {
            if (!isset($this->$propname)) {
                $this->createProperty($propname, []);
            }
            $c = new $className($arguments[0]);
            array_push($this->$propname, $c);
        } else {
            $this->createProperty($propname, new $className($arguments[0]));
        }
        return $this->$propname;
    }

    /**
     * Create properties
     * @param string $name
     * @param NFePHP\NFe\Tags\TagInterface $value
     */
    protected function createProperty($name, $value)
    {
        $this->{$name} = $value;
    }
}
