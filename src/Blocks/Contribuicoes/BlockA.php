<?php

namespace NFePHP\EFD\Blocks\Contribuicoes;

use NFePHP\EFD\Elements\Contribuicoes as Elements;
use NFePHP\EFD\Common\Block;

/**
 * Classe constutora do bloco A EFD Contribuições
 *
 */
final class BlockA extends Block
{
    const TOTAL = 'A990';

    public $elements = [
        'a001' => ['class' => Elements\A001::class, 'level' => 1, 'type' => 'single'],
        'a010' => ['class' => Elements\A010::class, 'level' => 2, 'type' => 'single'],
        'a100' => ['class' => Elements\A100::class, 'level' => 3, 'type' => 'multiple'],
        'a110' => ['class' => Elements\A110::class, 'level' => 4, 'type' => 'multiple'],
        'a111' => ['class' => Elements\A111::class, 'level' => 4, 'type' => 'multiple'],
        'a120' => ['class' => Elements\A120::class, 'level' => 4, 'type' => 'multiple'],
        'a170' => ['class' => Elements\A170::class, 'level' => 4, 'type' => 'multiple'],
    ];

    public function __construct(string $layout = null)
    {
        $this->grupo = 'Contribuicoes';
        parent::__construct($layout);
        $this->elementTotal = 'A990';
    }
}
