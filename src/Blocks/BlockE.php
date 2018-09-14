<?php

namespace NFePHP\EFD\Blocks;

use NFePHP\EFD\Blocks\Base;
use NFePHP\EFD\Blocks\BlockInterface;
use NFePHP\EFD\Blocks\ElementsICMS as Elements;

class BlockE extends Base implements BlockInterface
{
    public $elements = [
        'E001' => ['class' => Elements\E001::class, 'level' => 1, 'type' => 'single'],
        'E100' => ['class' => Elements\E100::class, 'level' => 2, 'type' => 'multiple'],
        'E110' => ['class' => Elements\E110::class, 'level' => 3, 'type' => 'single'],
        'E111' => ['class' => Elements\E111::class, 'level' => 4, 'type' => 'multiple'],
        'E112' => ['class' => Elements\E112::class, 'level' => 5, 'type' => 'multiple'],
        'E113' => ['class' => Elements\E113::class, 'level' => 5, 'type' => 'multiple'],
        'E115' => ['class' => Elements\E115::class, 'level' => 4, 'type' => 'multiple'],
        'E116' => ['class' => Elements\E116::class, 'level' => 4, 'type' => 'multiple'],
        'E200' => ['class' => Elements\E200::class, 'level' => 2, 'type' => 'multiple'],
        'E210' => ['class' => Elements\E200::class, 'level' => 3, 'type' => 'single'],
        'E220' => ['class' => Elements\E220::class, 'level' => 4, 'type' => 'multiple'],
        'E230' => ['class' => Elements\E230::class, 'level' => 5, 'type' => 'multiple'],
        'E240' => ['class' => Elements\E240::class, 'level' => 5, 'type' => 'multiple'],
        'E250' => ['class' => Elements\E250::class, 'level' => 4, 'type' => 'multiple'],
        'E300' => ['class' => Elements\E300::class, 'level' => 2, 'type' => 'multiple'],
        'E310' => ['class' => Elements\E310::class, 'level' => 3, 'type' => 'single'],
        'E311' => ['class' => Elements\E311::class, 'level' => 4, 'type' => 'multiple'],
        'E312' => ['class' => Elements\E312::class, 'level' => 5, 'type' => 'multiple'],
        'E313' => ['class' => Elements\E313::class, 'level' => 5, 'type' => 'multiple'],
        'E316' => ['class' => Elements\E316::class, 'level' => 4, 'type' => 'multiple'],
        'E500' => ['class' => Elements\E500::class, 'level' => 2, 'type' => 'multiple'],
        'E510' => ['class' => Elements\E510::class, 'level' => 3, 'type' => 'multiple'],
        'E520' => ['class' => Elements\E520::class, 'level' => 3, 'type' => 'single'],
        'E530' => ['class' => Elements\E530::class, 'level' => 4, 'type' => 'multiple'],
        'E531' => ['class' => Elements\E531::class, 'level' => 5, 'type' => 'multiple'],
        'E990' => ['class' => Elements\E200::class, 'level' => 1, 'type' => 'single'],
    ];
}
