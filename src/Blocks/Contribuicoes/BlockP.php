<?php

namespace NFePHP\EFD\Blocks\Contribuicoes;

use NFePHP\EFD\Elements\Contribuicoes as Elements;
use NFePHP\EFD\Common\Block;

/**
 * Classe constutora do bloco P EFD Contribuições
 *
 * @method Elements\P001 p001(\stdClass $std) Constructor element P001
 * @method Elements\P010 p010(\stdClass $std) Constructor element P010
 * @method Elements\P100 p100(\stdClass $std) Constructor element P100
 * @method Elements\P110 p110(\stdClass $std) Constructor element P110
 * @method Elements\P199 p199(\stdClass $std) Constructor element P199
 * @method Elements\P200 p200(\stdClass $std) Constructor element P200
 * @method Elements\P210 p210(\stdClass $std) Constructor element P210
 */
final class BlockP extends Block
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

    public function __construct(string $layout = null)
    {
        $this->grupo = 'Contribuicoes';
        parent::__construct($layout);
        $this->elementTotal = 'P990';
    }
}
