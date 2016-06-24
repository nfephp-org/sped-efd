<?php

namespace NFePHP\EFD;

/**
 * Esta é a classe principal que constroi o objeto que deve representar
 * neste caso uma arquivo EFD
 * 
 * E deve ser instanciada para a criação do objeto e sua posterior envio
 * a um arquivo ou base de dados 
 * 
 * 
 * a ideia é chamar assim
 * 
 * $efd = new make();
 * 
 * $efd->producao->abertura(Array $dados);
 * $efd->producao->periodo(Array $dados);
 * $efd->producao->estoque(Array $dados);
 * 
 */

use NFePHP\EFD\Blocks\Builder;
use Collections\ArrayList;

class Make
{
    protected $blocoK;


    /**
     * LIsta com os erros encontrados
     * por não satisfazer algum requisito da SEFAZ
     * avalido pelo método validate() das classes derivadas 
     * da classe BaseBlock
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
        //estabelecer as propriedades que serão coleções
        $this->blocoK = new ArrayList();
    }
    
    /**
     * Estrutura a chamada a classe 
     * @param string $method
     * @param array $params
     * @return Object
     */
    public function builder($method, $params = null)
    {
        $tag = (new Builder)
            ->params($params)
            ->call($method);
       
        $this->set($method, $tag);
        return $tag;
    }
    
    /**
     * Carrega a lista de propriedades da classe
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
     * @param Object $value
     */
    private function set($property, $value) {
        foreach ($this->properties as $propertyName) {
            if ($propertyName == $property) {
                if (get_class($this->{$property}) === 'Collections\ArrayList') {
                    $this->{$property}->add($value);
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
     * que compõe a NFe
     * @return array
     */
    public function errors()
    {
        return $this->errors;
    }
}
