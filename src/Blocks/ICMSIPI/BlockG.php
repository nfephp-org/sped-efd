<?php

namespace NFePHP\EFD\Blocks\ICMSIPI;

use NFePHP\EFD\Elements\ICMSIPI as Elements;
use NFePHP\EFD\Common\Block;
use NFePHP\EFD\Common\BlockInterface;

/**
 * Classe constutora do bloco G
 *
 * Esta classe irá usar um recurso para invocar as classes de cada um dos elementos
 * constituintes listados
 */
final class BlockG extends Block implements BlockInterface
{
    const TOTAL = 'G990';
    
    public $elements = [
        'g001' => ['class' => Elements\G001::class, 'level' => 1, 'type' => 'single'],
        'g110' => ['class' => Elements\G110::class, 'level' => 2, 'type' => 'multiple'],
        'g125' => ['class' => Elements\G125::class, 'level' => 3, 'type' => 'multiple'],
        'g126' => ['class' => Elements\G126::class, 'level' => 4, 'type' => 'multiple'],
        'g130' => ['class' => Elements\G130::class, 'level' => 4, 'type' => 'multiple'],
        'g140' => ['class' => Elements\G140::class, 'level' => 5, 'type' => 'multiple']
    ];
    
    public function __construct()
    {
        parent::__construct(self::TOTAL);
    }
}
