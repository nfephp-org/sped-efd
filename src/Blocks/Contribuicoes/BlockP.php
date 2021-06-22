<?php

namespace NFePHP\EFD\Blocks\Contribuicoes;

use NFePHP\EFD\Elements\Contribuicoes as Elements;
use NFePHP\EFD\Common\Block;
use NFePHP\EFD\Common\BlockInterface;

/**
 * Classe constutora do bloco P EFD Contribuições
 *
 */
final class BlockP extends Block implements BlockInterface
{
    const TOTAL = 'P990';

    public $elements = [
        'p001' => ['class' => Elements\P001::class, 'level' => 1, 'type' => 'single'],
        'p010' => ['class' => Elements\P010::class, 'level' => 2, 'type' => 'single'],
        'p100' => ['class' => Elements\P100::class, 'level' => 3, 'type' => 'single'],
        'p110' => ['class' => Elements\P110::class, 'level' => 4, 'type' => 'multiple'],
        'p199' => ['class' => Elements\P199::class, 'level' => 4, 'type' => 'multiple'],
        'p200' => ['class' => Elements\P200::class, 'level' => 2, 'type' => 'multiple'],
        'p210' => ['class' => Elements\P210::class, 'level' => 3, 'type' => 'single'],
    ];

    public function __construct()
    {
        parent::__construct(self::TOTAL);
    }
}
