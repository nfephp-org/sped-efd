<?php

namespace NFePHP\EFD\Blocks\Contribuicoes;

use NFePHP\EFD\Elements\Contribuicoes as Elements;
use NFePHP\EFD\Common\Block;
use NFePHP\EFD\Common\BlockInterface;

/**
 * Classe constutora do bloco I EFD Contribuições
 *
 */
final class BlockI extends Block implements BlockInterface
{
    public $elements = [
        'i001' => ['class' => Elements\I001::class, 'level' => 1, 'type' => 'single'],
        'i010' => ['class' => Elements\I010::class, 'level' => 2, 'type' => 'single'],
        'i100' => ['class' => Elements\I100::class, 'level' => 3, 'type' => 'multiple'],
        'i199' => ['class' => Elements\I199::class, 'level' => 5, 'type' => 'multiple'],
        'i200' => ['class' => Elements\I200::class, 'level' => 5, 'type' => 'multiple'],
        'i299' => ['class' => Elements\I299::class, 'level' => 5, 'type' => 'multiple'],
        'i300' => ['class' => Elements\I300::class, 'level' => 5, 'type' => 'multiple'],
        'i399' => ['class' => Elements\I399::class, 'level' => 6, 'type' => 'multiple'],
    ];
}
