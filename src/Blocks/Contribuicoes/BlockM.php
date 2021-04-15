<?php

namespace NFePHP\EFD\Blocks\Contribuicoes;

use NFePHP\EFD\Elements\Contribuicoes as Elements;
use NFePHP\EFD\Common\Block;
use NFePHP\EFD\Common\BlockInterface;

/**
 * Classe constutora do bloco M EFD Contribuições
 *
 */
final class BlockM extends Block implements BlockInterface
{
    const TOTAL = '0990';

    public $elements = [
        'm001' => ['class' => Elements\M001::class, 'level' => 1, 'type' => 'single'],
        'm100' => ['class' => Elements\M100::class, 'level' => 2, 'type' => 'single'],
        'm105' => ['class' => Elements\M105::class, 'level' => 3, 'type' => 'single'],
        'm110' => ['class' => Elements\M110::class, 'level' => 3, 'type' => 'multiple'],
        'm115' => ['class' => Elements\M115::class, 'level' => 4, 'type' => 'multiple'],
        'm200' => ['class' => Elements\M200::class, 'level' => 2, 'type' => 'multiple'],
        'm205' => ['class' => Elements\M205::class, 'level' => 3, 'type' => 'multiple'],
        'm210' => ['class' => Elements\M210::class, 'level' => 3, 'type' => 'single'],
        'm211' => ['class' => Elements\M211::class, 'level' => 4, 'type' => 'multiple'],
        'm215' => ['class' => Elements\M215::class, 'level' => 4, 'type' => 'multiple'],
        'm220' => ['class' => Elements\M220::class, 'level' => 4, 'type' => 'multiple'],
        'm225' => ['class' => Elements\M225::class, 'level' => 5, 'type' => 'multiple'],
        'm230' => ['class' => Elements\M230::class, 'level' => 4, 'type' => 'multiple'],
        'm300' => ['class' => Elements\M300::class, 'level' => 2, 'type' => 'multiple'],
        'm350' => ['class' => Elements\M350::class, 'level' => 2, 'type' => 'single'],
        'm400' => ['class' => Elements\M400::class, 'level' => 2, 'type' => 'multiple'],
        'm410' => ['class' => Elements\M410::class, 'level' => 3, 'type' => 'multiple'],
        'm500' => ['class' => Elements\M500::class, 'level' => 2, 'type' => 'single'],
        'm505' => ['class' => Elements\M505::class, 'level' => 3, 'type' => 'single'],
        'm510' => ['class' => Elements\M510::class, 'level' => 3, 'type' => 'single'],
        'm515' => ['class' => Elements\M515::class, 'level' => 4, 'type' => 'single'],
        'm600' => ['class' => Elements\M600::class, 'level' => 2, 'type' => 'multiple'],
        'm605' => ['class' => Elements\M605::class, 'level' => 3, 'type' => 'multiple'],
        'm610' => ['class' => Elements\M610::class, 'level' => 3, 'type' => 'multiple'],
        'm611' => ['class' => Elements\M611::class, 'level' => 4, 'type' => 'single'],
        'm615' => ['class' => Elements\M615::class, 'level' => 4, 'type' => 'single'],
        'm620' => ['class' => Elements\M620::class, 'level' => 4, 'type' => 'multiple'],
        'm625' => ['class' => Elements\M625::class, 'level' => 5, 'type' => 'multiple'],
        'm630' => ['class' => Elements\M630::class, 'level' => 4, 'type' => 'multiple'],
        'm700' => ['class' => Elements\M700::class, 'level' => 2, 'type' => 'single'],
        'm800' => ['class' => Elements\M800::class, 'level' => 2, 'type' => 'multiple'],
        'm810' => ['class' => Elements\M810::class, 'level' => 3, 'type' => 'single'],
    ];

    public function __construct()
    {
        parent::__construct(self::TOTAL);
    }
}