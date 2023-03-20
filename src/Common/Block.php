<?php
namespace NFePHP\EFD\Common;

/**
 * Classe abstrata basica de onde cada bloco é cunstruido
 */
abstract class Block
{
    /**
     * @var array
     */
    public $errors = [];
    /**
     * @var array
     */
    public $elements = [];
    /**
     * @var string
     */
    protected $bloco = '';
    /**
     * @var int
     */
    protected $elementTotal;


    /**
     * Call classes to build each EFD element
     * @param string $name
     * @param array $arguments [std]
     * @return void
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
        foreach ($elclass->errors as $err) {
            $this->errors[] = $err;
        }
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
        $this->bloco .= "|" . $this->elementTotal . "|$n|\n";
        return $this->bloco;
    }
}
