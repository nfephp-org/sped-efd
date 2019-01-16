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
 * NOTA: usada a letra z no inicio do elemento devido ao fato de não poder chamar classes
 * apenas com numeros e também para não confundir com os elementos do bloco B
 */
final class Block0 extends Block implements BlockInterface
{
    public $elements = [
        'z0000' => ['class' => Elements\Z0000::class, 'level' => 0, 'type' => 'single'],
        'z0001' => ['class' => Elements\Z0001::class, 'level' => 1, 'type' => 'single'],
        'z0035' => ['class' => Elements\Z0035::class, 'level' => 2, 'type' => 'single'],
        'z0100' => ['class' => Elements\Z0100::class, 'level' => 2, 'type' => 'single'],
        'z0110' => ['class' => Elements\Z0110::class, 'level' => 2, 'type' => 'multiple'],
        'z0111' => ['class' => Elements\Z0111::class, 'level' => 3, 'type' => 'multiple'],
        'z0120' => ['class' => Elements\Z0120::class, 'level' => 2, 'type' => 'multiple'],
        'z0140' => ['class' => Elements\Z0140::class, 'level' => 2, 'type' => 'multiple'],
        'z0145' => ['class' => Elements\Z0145::class, 'level' => 3, 'type' => 'multiple'],
        'z0150' => ['class' => Elements\Z0150::class, 'level' => 3, 'type' => 'single'],
        'z0190' => ['class' => Elements\Z0190::class, 'level' => 3, 'type' => 'multiple'],
        'z0200' => ['class' => Elements\Z0200::class, 'level' => 3, 'type' => 'multiple'],
        'z0205' => ['class' => Elements\Z0205::class, 'level' => 3, 'type' => 'multiple'],
        'z0206' => ['class' => Elements\Z0206::class, 'level' => 3, 'type' => 'multiple'],
        'z0208' => ['class' => Elements\Z0208::class, 'level' => 3, 'type' => 'multiple'],
        'z0400' => ['class' => Elements\Z0400::class, 'level' => 2, 'type' => 'multiple'],
        'z0450' => ['class' => Elements\Z0450::class, 'level' => 3, 'type' => 'single'],
        'z0500' => ['class' => Elements\Z0500::class, 'level' => 2, 'type' => 'multiple'],
        'z0600' => ['class' => Elements\Z0600::class, 'level' => 2, 'type' => 'multiple']
    ];
}
