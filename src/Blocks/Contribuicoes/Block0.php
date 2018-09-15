<?php

namespace NFePHP\EFD\Blocks\Contribuicoes;

use NFePHP\EFD\Elements\Contribuicoes as Elements;
use NFePHP\EFD\Common\Block;
use NFePHP\EFD\Common\BlockInterface;

/**
 * Classe constutora do bloco 0 (inicial) EFD Contribuições
 *
 * Esta classe irá usar um recurso para invocar as classes de cada um dos elementos
 * constituintes listados.
 */
final class Block0 extends Block implements BlockInterface
{
    public $elements = [
        'b0000' => ['class' => Elements\B0000::class, 'level' => 0, 'type' => 'single'],
        'b0001' => ['class' => Elements\B0001::class, 'level' => 1, 'type' => 'single'],
        'b0035' => ['class' => Elements\B0035::class, 'level' => 2, 'type' => 'single'],
        'b0100' => ['class' => Elements\B0100::class, 'level' => 2, 'type' => 'single'],
        'b0110' => ['class' => Elements\B0110::class, 'level' => 2, 'type' => 'multiple'],
        'b0111' => ['class' => Elements\B0111::class, 'level' => 3, 'type' => 'multiple'],
        'b0120' => ['class' => Elements\B0120::class, 'level' => 2, 'type' => 'multiple'],
        'b0140' => ['class' => Elements\B0140::class, 'level' => 2, 'type' => 'multiple'],
        'b0145' => ['class' => Elements\B0145::class, 'level' => 3, 'type' => 'multiple'],
        'b0150' => ['class' => Elements\B0150::class, 'level' => 3, 'type' => 'single'],
        'b0190' => ['class' => Elements\B0190::class, 'level' => 3, 'type' => 'multiple'],
        'b0200' => ['class' => Elements\B0200::class, 'level' => 3, 'type' => 'multiple'],
        'b0205' => ['class' => Elements\B0205::class, 'level' => 3, 'type' => 'multiple'],
        'b0206' => ['class' => Elements\B0206::class, 'level' => 3, 'type' => 'multiple'],
        'b0208' => ['class' => Elements\B0208::class, 'level' => 3, 'type' => 'multiple'],
        'b0400' => ['class' => Elements\B0400::class, 'level' => 2, 'type' => 'multiple'],
        'b0450' => ['class' => Elements\B0450::class, 'level' => 3, 'type' => 'single'],
        'b0500' => ['class' => Elements\B0500::class, 'level' => 2, 'type' => 'multiple'],
        'b0600' => ['class' => Elements\B0600::class, 'level' => 2, 'type' => 'multiple']
    ];
}
