<?php

namespace NFePHP\EFD\Blocks\Contribuicoes;

use NFePHP\EFD\Elements\Contribuicoes as Elements;
use NFePHP\EFD\Common\Block;
use NFePHP\EFD\Common\BlockInterface;

/**
 * Classe constutora do bloco C EFD Contribuições
 *
 */
final class BlockC extends Block implements BlockInterface
{
    const TOTAL = 'C990';

    public $elements = [
        'c001' => ['class' => Elements\C001::class, 'level' => 1, 'type' => 'single'],
        'c010' => ['class' => Elements\C010::class, 'level' => 2, 'type' => 'single'],
        'c100' => ['class' => Elements\C100::class, 'level' => 3, 'type' => 'single'],
        'c110' => ['class' => Elements\C110::class, 'level' => 4, 'type' => 'single'],
        'c111' => ['class' => Elements\C111::class, 'level' => 4, 'type' => 'multiple'],
        'c120' => ['class' => Elements\C120::class, 'level' => 4, 'type' => 'multiple'],
        'c170' => ['class' => Elements\C170::class, 'level' => 4, 'type' => 'multiple'],
        'c175' => ['class' => Elements\C175::class, 'level' => 4, 'type' => 'multiple'],
        'c180' => ['class' => Elements\C180::class, 'level' => 3, 'type' => 'single'],
        'c181' => ['class' => Elements\C181::class, 'level' => 4, 'type' => 'multiple'],
        'c185' => ['class' => Elements\C185::class, 'level' => 4, 'type' => 'multiple'],
        'c188' => ['class' => Elements\C188::class, 'level' => 4, 'type' => 'multiple'],
        'c190' => ['class' => Elements\C190::class, 'level' => 3, 'type' => 'multiple'],
        'c191' => ['class' => Elements\C191::class, 'level' => 4, 'type' => 'multiple'],
        'c195' => ['class' => Elements\C195::class, 'level' => 4, 'type' => 'multiple'],
        'c198' => ['class' => Elements\C198::class, 'level' => 4, 'type' => 'single'],
        'c199' => ['class' => Elements\C199::class, 'level' => 4, 'type' => 'multiple'],
        'c380' => ['class' => Elements\C380::class, 'level' => 3, 'type' => 'multiple'],
        'c381' => ['class' => Elements\C381::class, 'level' => 4, 'type' => 'single'],
        'c385' => ['class' => Elements\C385::class, 'level' => 4, 'type' => 'single'],
        'c395' => ['class' => Elements\C395::class, 'level' => 3, 'type' => 'single'],
        'c396' => ['class' => Elements\C396::class, 'level' => 4, 'type' => 'single'],
        'c400' => ['class' => Elements\C400::class, 'level' => 3, 'type' => 'multiple'],
        'c405' => ['class' => Elements\C405::class, 'level' => 4, 'type' => 'multiple'],
        'c481' => ['class' => Elements\C481::class, 'level' => 5, 'type' => 'multiple'],
        'c485' => ['class' => Elements\C485::class, 'level' => 5, 'type' => 'multiple'],
        'c489' => ['class' => Elements\C489::class, 'level' => 4, 'type' => 'single'],
        'c490' => ['class' => Elements\C490::class, 'level' => 3, 'type' => 'multiple'],
        'c491' => ['class' => Elements\C491::class, 'level' => 4, 'type' => 'multiple'],
        'c495' => ['class' => Elements\C495::class, 'level' => 4, 'type' => 'multiple'],
        'c499' => ['class' => Elements\C499::class, 'level' => 4, 'type' => 'multiple'],
        'c500' => ['class' => Elements\C500::class, 'level' => 3, 'type' => 'multiple'],
        'c501' => ['class' => Elements\C501::class, 'level' => 4, 'type' => 'multiple'],
        'c505' => ['class' => Elements\C505::class, 'level' => 4, 'type' => 'single'],
        'c509' => ['class' => Elements\C509::class, 'level' => 4, 'type' => 'multiple'],
        'c600' => ['class' => Elements\C600::class, 'level' => 3, 'type' => 'multiple'],
        'c601' => ['class' => Elements\C601::class, 'level' => 4, 'type' => 'single'],
        'c605' => ['class' => Elements\C605::class, 'level' => 4, 'type' => 'single'],
        'c609' => ['class' => Elements\C609::class, 'level' => 4, 'type' => 'single'],
        'c800' => ['class' => Elements\C800::class, 'level' => 3, 'type' => 'single'],
        'c810' => ['class' => Elements\C810::class, 'level' => 4, 'type' => 'multiple'],
        'c820' => ['class' => Elements\C820::class, 'level' => 4, 'type' => 'multiple'],
        'c830' => ['class' => Elements\C830::class, 'level' => 4, 'type' => 'multiple'],
        'c860' => ['class' => Elements\C860::class, 'level' => 3, 'type' => 'multiple'],
        'c870' => ['class' => Elements\C870::class, 'level' => 4, 'type' => 'single'],
        'c880' => ['class' => Elements\C880::class, 'level' => 4, 'type' => 'multiple'],
        'c890' => ['class' => Elements\C890::class, 'level' => 4, 'type' => 'multiple'],
        'c990' => ['class' => Elements\C990::class, 'level' => 1, 'type' => 'multiple'],
    ];
}
