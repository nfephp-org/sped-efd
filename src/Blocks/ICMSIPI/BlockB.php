<?php

namespace NFePHP\EFD\Blocks\ICMSIPI;

use NFePHP\EFD\Elements\ICMSIPI as Elements;
use NFePHP\EFD\Common\Block;
use NFePHP\EFD\Common\BlockInterface;

/**
 * Classe constutora do bloco B
 *
 * Esta classe irá usar um recurso para invocar as classes de cada um dos elementos
 * constituintes listados
 */
final class BlockB extends Block implements BlockInterface
{
    const TOTAL = 'B990';
    
    public $elements = [
        'b001' => ['class' => Elements\B001::class, 'level' => 1, 'type' => 'single'],
        'b020' => ['class' => Elements\B020::class, 'level' => 2, 'type' => 'multiple'],
        'b025' => ['class' => Elements\B025::class, 'level' => 3, 'type' => 'multiple'],
        'b030' => ['class' => Elements\B030::class, 'level' => 2, 'type' => 'multiple'],
        'b035' => ['class' => Elements\B035::class, 'level' => 3, 'type' => 'multiple'],
        'b350' => ['class' => Elements\B350::class, 'level' => 2, 'type' => 'multiple'],
        'b420' => ['class' => Elements\B420::class, 'level' => 2, 'type' => 'multiple'],
        'b440' => ['class' => Elements\B440::class, 'level' => 2, 'type' => 'multiple'],
        'b460' => ['class' => Elements\B460::class, 'level' => 2, 'type' => 'multiple'],
        'b470' => ['class' => Elements\B470::class, 'level' => 2, 'type' => 'single'],
        'b500' => ['class' => Elements\B500::class, 'level' => 2, 'type' => 'single'],
        'b510' => ['class' => Elements\B510::class, 'level' => 3, 'type' => 'multiple']
    ];
    
    public function __construct()
    {
        parent::__construct(self::TOTAL);
    }
}
