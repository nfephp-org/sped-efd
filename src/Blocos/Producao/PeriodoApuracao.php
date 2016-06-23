<?php

namespace NFePHP\EFD\Blocos\Producao;

/**
 * REGISTRO K100: PERÍODO DE APURAÇÃO DO ICMS/IPI
 */

use NFePHP\EFD\Blocos\Basic\BlocoAbstract;

class PeriodoApuracao extends BlocoAbstract
{
    /**
     * Data formatada ddmmyyyy
     * @var string
     */
    protected $dtIni;
    /**
     * Data formatada ddmmyyyy
     * @var string
     */
    protected $dtFim;
    
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
        return "|K100|$this->dtIni|$this->dtFim|";
    }
}
