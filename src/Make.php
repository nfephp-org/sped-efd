<?php

namespace NFePHP\EFD;

use NFePHP\EFD\Blocos\Producao;

class Make
{
    public $producao;
    
    public function __construct()
    {
        $this->producao = new Producao();
    }
}
