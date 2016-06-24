<?php

namespace NFePHP\EFD\Blocos\Basic;

use League\Flysystem\Filesystem;
use League\Flysystem\Adapter\Local;

abstract class Factory
{
    /**
     * LIsta com os erros encontrados
     * por não satisfazer algum requisito da SEFAZ
     * avalido pelo método validate() das classes derivadas
     * da classe BlocoAbstract
     *
     * @var array
     */
    protected $errors = null;
    
    /**
     * Lista de propriedades desta classe
     * usado pelo método set() para localizar e carregar
     * as propriedades
     * @var array
     */
    protected $properties;
    
    /**
     * Contrutor
     * Carrega lista de propriedades desta classe
     */
    public function __construct()
    {
        $this->properties = $this->getClassVars();
    }
    
    abstract public function render();
    
    /**
     * Salva o bloco em um arquivo TXT
     * @param string $filename
     * @return boolean
     */
    public function save($filename = '')
    {
        if ($filename == '') {
            $aG = explode("\\", $this->group);
            $aG = array_slice($aG, -1);
            $filename = strtolower($aG[0]).'.txt';
        }
        $path = realpath(dirname(dirname(dirname(dirname(__FILE__)))));
        $adapter = new Local(
            $path,
            LOCK_EX,
            Local::DISALLOW_LINKS,
            [
                'file' => [
                    'public' => 0744,
                    'private' => 0700,
                ],
                'dir' => [
                    'public' => 0755,
                    'private' => 0700,
                ]
            ]
        );
        $filesystem = new Filesystem($adapter);
        //somente são aceitos caracteres ASCII ===> utf8_decode()
        //$filesystem->createDir('path/to/nested/directory');
        $filesystem->put($filename, implode("\n", $this->bloco), ['visibility' => 'public']);
        
        return true;
    }
    
    /**
     * Estrutura a chamada a classe
     * @param string $method
     * @param array $params
     *
     * @return Object
     */
    public function builder($method, $params = null)
    {
        $tag = (new Builder)
            ->params($params)
            ->subGroup($this->group)
            ->call($method);
       
        $this->set($method, $tag);
        return $tag;
    }
    
    /**
     * Carrega a lista de propriedades da classe
     *
     * @return array
     */
    private function getClassVars()
    {
        return array_keys(get_class_vars(get_class($this)));
    }
    
    /**
     * Carrega a TAG (Objeto) em uma propriedade da classe
     * para montagem e uso posterior
     * @param string $property
     *
     * @param Object $value
     */
    private function set($property, $value)
    {
        foreach ($this->properties as $propertyName) {
            if ($propertyName == $property) {
                if (is_array($this->{$property})) {
                    $this->{$property}[] = $value;
                } else {
                    $this->{$property} = $value;
                }
                break;
            }
        }
    }
    
    /**
     * Método mágico chamador
     * @param string $method
     * @param array $params
     *
     * @return type
     */
    public function __call($method, $params = null)
    {
        if (is_array($params)) {
            $params = $params[0];
        }
        return $this->builder($method, $params);
    }
    
    /**
     * Método mágico chamador
     * @param string $method
     * @param array $params
     *
     * @return Object
     */
    public static function __callStatic($method, $params = null)
    {
        if (is_array($params)) {
            $params = $params[0];
        }
        return self::builder($method, $params);
    }
    
    /**
     * Retorna a lista de erros por descumprimento
     * das regras da SEFAZ sobre cada um dos objetos
     * que compõe o EFD
     *
     * @return array
     */
    public function errors()
    {
        return $this->errors;
    }
}
