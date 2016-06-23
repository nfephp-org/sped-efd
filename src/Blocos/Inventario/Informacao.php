<?php

namespace NFePHP\EFD\Blocos\Inventario;

/**
 * REGISTRO H020: Informação complementar do Inventário.
 */

use NFePHP\EFD\Blocos\Basic\BlocoAbstract;

class Informacao extends BlocoAbstract
{
    /**
     * CST do ICMS (sob o enfoque do declarante) aplicável ao item, válido na data do levantamento do estoque
     * @var string
     */
    protected $cstIcms;
    /**
     * Base de cálculo do ICMS 2 decimais
     * @var string
     */
    protected $bcIcms;
    /**
     * Valor do ICMS 2 decimais
     * @var string
     */
    protected $valorIcms;

    /**
     * Carga, validação e formatação dos dados
     */
    protected function validate()
    {
        $this->loadProperties($this);
    }
    
    /**
     * Construtor do campo
     * @return string
     */
    protected function create()
    {
        return "|H020|$this->cstIcms|$this->bcIcms|$this->valorIcms|";
    }
}
