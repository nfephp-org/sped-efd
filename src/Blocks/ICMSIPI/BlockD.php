<?php

namespace NFePHP\EFD\Blocks\ICMSIPI;

use NFePHP\EFD\Elements\ICMSIPI as Elements;
use NFePHP\EFD\Common\Block;
use NFePHP\EFD\Common\BlockInterface;

/**
 * Classe constutora do bloco D
 *
 * Esta classe irá usar um recurso para invocar as classes de cada um dos elementos
 * constituintes listados
 */
final class BlockD extends Block implements BlockInterface
{
    const TOTAL = 'D990';
    
    public $elements = [];
    
    public function __construct()
    {
        parent::__construct(self::TOTAL);
    }
}
