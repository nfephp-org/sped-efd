<?php

namespace NFePHP\EFD\Blocks;

use NFePHP\EFD\Blocks\ElementsICMS as Elements;
use NFePHP\EFD\Blocks\Base;
use NFePHP\EFD\Blocks\BlockInterface;

/**
 * Classe constutora do bloco 0 (inicial)
 *
 * Esta classe irá usar um recurso para invocar as classes de cada um dos elementos
 * constituintes listados e criará uma propriedade para cada elemento e
 * fará a contagem (totalização de cada elemento) e montar o elemento de fachamento do bloco
 * podendo também construir e retornar o bloco isoladamente
 */
final class Block0 extends Base implements BlockInterface
{
    public $elements = [
        'b0000' => ['class' => Elements\B0000::class, 'level' => 0, 'type' => 'single'],
        'b0001' => ['class' => Elements\B0001::class, 'level' => 1, 'type' => 'single'],
        'b0005' => ['class' => Elements\B0005::class, 'level' => 2, 'type' => 'single'],
        'b0015' => ['class' => Elements\B0015::class, 'level' => 2, 'type' => 'multiple'],
        'b0100' => ['class' => Elements\B0100::class, 'level' => 2, 'type' => 'single'],
        'b0150' => ['class' => Elements\B0150::class, 'level' => 2, 'type' => 'multiple'],
        'b0175' => ['class' => Elements\B0175::class, 'level' => 3, 'type' => 'multiple'],
        'b0190' => ['class' => Elements\B0190::class, 'level' => 2, 'type' => 'multiple'],
        'b0200' => ['class' => Elements\B0200::class, 'level' => 2, 'type' => 'multiple'],
        'b0205' => ['class' => Elements\B0205::class, 'level' => 3, 'type' => 'multiple'],
        'b0206' => ['class' => Elements\B0206::class, 'level' => 3, 'type' => 'single'],
        'b0210' => ['class' => Elements\B0210::class, 'level' => 3, 'type' => 'multiple'],
        'b0220' => ['class' => Elements\B0220::class, 'level' => 3, 'type' => 'multiple'],
        'b0300' => ['class' => Elements\B0300::class, 'level' => 2, 'type' => 'multiple'],
        'b0305' => ['class' => Elements\B0305::class, 'level' => 3, 'type' => 'single'],
        'b0400' => ['class' => Elements\B0400::class, 'level' => 2, 'type' => 'multiple'],
        'b0450' => ['class' => Elements\B0450::class, 'level' => 2, 'type' => 'multiple'],
        'b0460' => ['class' => Elements\B0460::class, 'level' => 2, 'type' => 'multiple'],
        'b0500' => ['class' => Elements\B0500::class, 'level' => 2, 'type' => 'multiple'],
        'b0600' => ['class' => Elements\B0600::class, 'level' => 2, 'type' => 'multiple']
    ];
}
