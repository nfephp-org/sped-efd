<?php
namespace NFePHP\EFD\Common;

/**
 * Classe abstrata basica de onde cada bloco é cunstruido
 */
abstract class Block
{
    public $elements = [];
    protected $bloco = '';
    protected $elementTotal;

    public function __construct($total)
    {
        $this->elementTotal = $total;
    }

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


        //aqui deve ser feita a construção do bloco
        //para fazer a montagem verificar o elemento pai
        //se não existir elemento pai no bloco disparar um exception
        //$parent = $elclass::PARENT;

        //o parent pode ser um ou multipos separados por |
        //se não existir o parent então apenas acrescentar sem necessidade
        //de verificação
        //TODO

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
