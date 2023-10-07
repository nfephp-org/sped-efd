<?php
namespace NFePHP\EFD\Common;

/**
 * Classe abstrata basica de onde cada bloco é cunstruido
 */
abstract class Block implements BlockInterface
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
     * @var string
     */
    protected $layout;
    /**
     * @var \stdClass
     */
    protected $vigencia;
    /**
     * @var string
     */
    protected $grupo;

    /**
     * @param string|null $layout
     */
    public function __construct(string $layout = null)
    {
        $layout = str_pad($layout ?? 0, 3, '0', STR_PAD_LEFT);
        $this->vigencia = (object) $this->layoutPath($layout);
        $this->layout = $this->vigencia->layout;
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
        $elclass = new $className($arguments[0], $this->vigencia ?? null);
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

    /**
     * Procura e usa a ultima vigência registrada no json
     * @param string|null $layout
     * @return array
     */
    protected function layoutPath(string $layout = null): array
    {
        $path = dirname(dirname(__DIR__)) . '/storage/layouts/'. $this->grupo;
        $vigarray = json_decode(file_get_contents($path .  '/vigencias.json'), true);
        $vigencia = $vigarray[$layout] ?? null;
        if (empty($vigencia)) {
            $last = array_key_last($vigarray);
            return ['path' => $path, 'layout' => (string) $last, 'vigencia' => (object) $vigarray[$last]];
        }
        return ['path' => $path, 'layout' => (string) $layout, 'vigencia' => (object) $vigarray[$layout]];
    }
}
