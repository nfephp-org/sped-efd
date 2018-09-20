<?php

namespace NFePHP\EFD\Blocks\ICMSIPI;

use NFePHP\EFD\Elements\ICMSIPI as Elements;
use NFePHP\EFD\Common\Block;
use NFePHP\EFD\Common\BlockInterface;

/**
 * Classe constutora do bloco 0 (inicial)
 *
 * Esta classe irá usar um recurso para invocar as classes de cada um dos elementos
 * constituintes listados
 *
 * NOTA: usada a letra z no inicio do elemento devido ao fato de não poder chamar classes
 * apenas com numeros e também para não confundir os com elementos do bloco B
 */
final class Block0 extends Block implements BlockInterface
{
    public $elements = [
        'z0000' => ['class' => Elements\Z0000::class, 'level' => 0, 'type' => 'single'],
        'z0001' => ['class' => Elements\Z0001::class, 'level' => 1, 'type' => 'single'],
        'z0005' => ['class' => Elements\Z0005::class, 'level' => 2, 'type' => 'single'],
        'z0015' => ['class' => Elements\Z0015::class, 'level' => 2, 'type' => 'multiple'],
        'z0100' => ['class' => Elements\Z0100::class, 'level' => 2, 'type' => 'single'],
        'z0150' => ['class' => Elements\Z0150::class, 'level' => 2, 'type' => 'multiple'],
        'z0175' => ['class' => Elements\Z0175::class, 'level' => 3, 'type' => 'multiple'],
        'z0190' => ['class' => Elements\Z0190::class, 'level' => 2, 'type' => 'multiple'],
        'z0200' => ['class' => Elements\Z0200::class, 'level' => 2, 'type' => 'multiple'],
        'z0205' => ['class' => Elements\Z0205::class, 'level' => 3, 'type' => 'multiple'],
        'z0206' => ['class' => Elements\Z0206::class, 'level' => 3, 'type' => 'single'],
        'z0210' => ['class' => Elements\Z0210::class, 'level' => 3, 'type' => 'multiple'],
        'z0220' => ['class' => Elements\Z0220::class, 'level' => 3, 'type' => 'multiple'],
        'z0300' => ['class' => Elements\Z0300::class, 'level' => 2, 'type' => 'multiple'],
        'z0305' => ['class' => Elements\Z0305::class, 'level' => 3, 'type' => 'single'],
        'z0400' => ['class' => Elements\Z0400::class, 'level' => 2, 'type' => 'multiple'],
        'z0450' => ['class' => Elements\Z0450::class, 'level' => 2, 'type' => 'multiple'],
        'z0460' => ['class' => Elements\Z0460::class, 'level' => 2, 'type' => 'multiple'],
        'z0500' => ['class' => Elements\Z0500::class, 'level' => 2, 'type' => 'multiple'],
        'z0600' => ['class' => Elements\Z0600::class, 'level' => 2, 'type' => 'multiple']
    ];
}
