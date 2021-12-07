<?php

namespace NFePHP\EFD\Blocks\Contribuicoes;

use NFePHP\EFD\Elements\Contribuicoes as Elements;
use NFePHP\EFD\Common\Block;
use NFePHP\EFD\Common\BlockInterface;

/**
 * Classe constutora do bloco 1 EFD Contribuições
 *
 */
final class Block1 extends Block implements BlockInterface
{
    const TOTAL = '1990';

    public $elements = [
        'z1001' => ['class' => Elements\Z1001::class, 'level' => 1, 'type' => 'single'],
        'z1010' => ['class' => Elements\Z1010::class, 'level' => 2, 'type' => 'single'],
        'z1020' => ['class' => Elements\Z1020::class, 'level' => 2, 'type' => 'multiple'],
        'z1050' => ['class' => Elements\Z1050::class, 'level' => 2, 'type' => 'multiple'],
        'z1100' => ['class' => Elements\Z1100::class, 'level' => 2, 'type' => 'multiple'],
        'z1101' => ['class' => Elements\Z1101::class, 'level' => 3, 'type' => 'multiple'],
        'z1102' => ['class' => Elements\Z1102::class, 'level' => 4, 'type' => 'multiple'],
        'z1200' => ['class' => Elements\Z1200::class, 'level' => 2, 'type' => 'multiple'],
        'z1210' => ['class' => Elements\Z1210::class, 'level' => 3, 'type' => 'multiple'],
        'z1220' => ['class' => Elements\Z1220::class, 'level' => 3, 'type' => 'multiple'],
        'z1300' => ['class' => Elements\Z1300::class, 'level' => 2, 'type' => 'multiple'],
        'z1500' => ['class' => Elements\Z1500::class, 'level' => 2, 'type' => 'multiple'],
        'z1501' => ['class' => Elements\Z1501::class, 'level' => 3, 'type' => 'multiple'],
        'z1502' => ['class' => Elements\Z1502::class, 'level' => 4, 'type' => 'multiple'],
        'z1600' => ['class' => Elements\Z1600::class, 'level' => 2, 'type' => 'multiple'],
        'z1601' => ['class' => Elements\Z1601::class, 'level' => 2, 'type' => 'multiple'],
        'z1610' => ['class' => Elements\Z1610::class, 'level' => 3, 'type' => 'multiple'],
        'z1620' => ['class' => Elements\Z1620::class, 'level' => 3, 'type' => 'multiple'],
        'z1700' => ['class' => Elements\Z1700::class, 'level' => 2, 'type' => 'multiple'],
        'z1800' => ['class' => Elements\Z1800::class, 'level' => 2, 'type' => 'multiple'],
        'z1809' => ['class' => Elements\Z1809::class, 'level' => 3, 'type' => 'multiple'],
        'z1900' => ['class' => Elements\Z1900::class, 'level' => 2, 'type' => 'multiple'],
    ];

    public function __construct()
    {
        parent::__construct(self::TOTAL);
    }
}
