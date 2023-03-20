<?php

namespace NFePHP\EFD\Blocks\Contribuicoes;

use NFePHP\EFD\Elements\Contribuicoes as Elements;
use NFePHP\EFD\Common\Block;
use NFePHP\EFD\Common\BlockInterface;

/**
 * Classe constutora do bloco D EFD Contribuições
 *
 */
final class BlockD extends Block implements BlockInterface
{
    const TOTAL = 'D990';

    public $elements = [
        'd001' => ['class' => Elements\D001::class, 'level' => 1, 'type' => 'single'],
        'd010' => ['class' => Elements\D010::class, 'level' => 2, 'type' => 'single'],
        'd100' => ['class' => Elements\D100::class, 'level' => 3, 'type' => 'multiple'],
        'd101' => ['class' => Elements\D101::class, 'level' => 4, 'type' => 'multiple'],
        'd105' => ['class' => Elements\D105::class, 'level' => 4, 'type' => 'multiple'],
        'd111' => ['class' => Elements\D111::class, 'level' => 4, 'type' => 'multiple'],
        'd200' => ['class' => Elements\D200::class, 'level' => 3, 'type' => 'multiple'],
        'd201' => ['class' => Elements\D201::class, 'level' => 4, 'type' => 'multiple'],
        'd205' => ['class' => Elements\D205::class, 'level' => 4, 'type' => 'multiple'],
        'd209' => ['class' => Elements\D209::class, 'level' => 4, 'type' => 'multiple'],
        'd300' => ['class' => Elements\D300::class, 'level' => 3, 'type' => 'multiple'],
        'd309' => ['class' => Elements\D309::class, 'level' => 4, 'type' => 'multiple'],
        'd350' => ['class' => Elements\D350::class, 'level' => 3, 'type' => 'multiple'],
        'd359' => ['class' => Elements\D359::class, 'level' => 4, 'type' => 'multiple'],
        'd500' => ['class' => Elements\D500::class, 'level' => 3, 'type' => 'multiple'],
        'd501' => ['class' => Elements\D501::class, 'level' => 4, 'type' => 'multiple'],
        'd505' => ['class' => Elements\D505::class, 'level' => 4, 'type' => 'multiple'],
        'd509' => ['class' => Elements\D509::class, 'level' => 4, 'type' => 'multiple'],
        'd600' => ['class' => Elements\D600::class, 'level' => 3, 'type' => 'multiple'],
        'd601' => ['class' => Elements\D601::class, 'level' => 4, 'type' => 'multiple'],
        'd605' => ['class' => Elements\D605::class, 'level' => 4, 'type' => 'multiple'],
        'd609' => ['class' => Elements\D609::class, 'level' => 4, 'type' => 'multiple'],
    ];
}
