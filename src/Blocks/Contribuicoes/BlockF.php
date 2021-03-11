<?php

namespace NFePHP\EFD\Blocks\Contribuicoes;

use NFePHP\EFD\Elements\Contribuicoes as Elements;
use NFePHP\EFD\Common\Block;
use NFePHP\EFD\Common\BlockInterface;

/**
 * Classe constutora do bloco F EFD Contribuições
 *
 */
final class BlockF extends Block implements BlockInterface
{
    public $elements = [
        'f001' => ['class' => Elements\F001::class, 'level' => 1, 'type' => 'single'],
        'f010' => ['class' => Elements\F010::class, 'level' => 2, 'type' => 'single'],
        'f100' => ['class' => Elements\F100::class, 'level' => 3, 'type' => 'multiple'],
        'f111' => ['class' => Elements\F111::class, 'level' => 4, 'type' => 'multiple'],
        'f120' => ['class' => Elements\F120::class, 'level' => 3, 'type' => 'multiple'],
        'f129' => ['class' => Elements\F129::class, 'level' => 4, 'type' => 'multiple'],
        'f130' => ['class' => Elements\F130::class, 'level' => 3, 'type' => 'multiple'],
        'f139' => ['class' => Elements\F139::class, 'level' => 4, 'type' => 'multiple'],
        'f150' => ['class' => Elements\F150::class, 'level' => 3, 'type' => 'multiple'],
        'f200' => ['class' => Elements\F200::class, 'level' => 3, 'type' => 'multiple'],
        'f205' => ['class' => Elements\F205::class, 'level' => 4, 'type' => 'multiple'],
        'f210' => ['class' => Elements\F210::class, 'level' => 4, 'type' => 'multiple'],
        'f211' => ['class' => Elements\F211::class, 'level' => 4, 'type' => 'multiple'],
        'f500' => ['class' => Elements\F500::class, 'level' => 3, 'type' => 'multiple'],
        'f509' => ['class' => Elements\F509::class, 'level' => 4, 'type' => 'multiple'],
        'f510' => ['class' => Elements\F510::class, 'level' => 3, 'type' => 'multiple'],
        'f519' => ['class' => Elements\F519::class, 'level' => 4, 'type' => 'multiple'],
        'f525' => ['class' => Elements\F525::class, 'level' => 3, 'type' => 'multiple'],
        'f550' => ['class' => Elements\F550::class, 'level' => 3, 'type' => 'multiple'],
        'f559' => ['class' => Elements\F559::class, 'level' => 4, 'type' => 'multiple'],
        'f560' => ['class' => Elements\F560::class, 'level' => 3, 'type' => 'multiple'],
        'f569' => ['class' => Elements\F569::class, 'level' => 4, 'type' => 'multiple'],
        'f600' => ['class' => Elements\F600::class, 'level' => 3, 'type' => 'multiple'],
        'f700' => ['class' => Elements\F700::class, 'level' => 3, 'type' => 'multiple'],
        'f800' => ['class' => Elements\F800::class, 'level' => 3, 'type' => 'multiple'],
    ];
}
