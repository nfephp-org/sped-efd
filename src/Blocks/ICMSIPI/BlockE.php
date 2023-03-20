<?php

namespace NFePHP\EFD\Blocks\ICMSIPI;

use NFePHP\EFD\Elements\ICMSIPI as Elements;
use NFePHP\EFD\Common\Block;
use NFePHP\EFD\Common\BlockInterface;

/**
 * Classe constutora do bloco E
 *
 * Esta classe irá usar um recurso para invocar as classes de cada um dos elementos
 * constituintes listados
 *
 * @method Elements\E001 e001(\stdClass $std) Constructor element E001
 * @method Elements\E100 e100(\stdClass $std) Constructor element E100
 * @method Elements\E110 e110(\stdClass $std) Constructor element E110
 * @method Elements\E111 e111(\stdClass $std) Constructor element E111
 * @method Elements\E112 e112(\stdClass $std) Constructor element E112
 * @method Elements\E113 e113(\stdClass $std) Constructor element E113
 * @method Elements\E115 e115(\stdClass $std) Constructor element E115
 * @method Elements\E116 e116(\stdClass $std) Constructor element E116
 * @method Elements\E200 e200(\stdClass $std) Constructor element E200
 * @method Elements\E210 e210(\stdClass $std) Constructor element E210
 * @method Elements\E220 e220(\stdClass $std) Constructor element E220
 * @method Elements\E230 e230(\stdClass $std) Constructor element E230
 * @method Elements\E240 e240(\stdClass $std) Constructor element E240
 * @method Elements\E250 e250(\stdClass $std) Constructor element E250
 * @method Elements\E300 e300(\stdClass $std) Constructor element E300
 * @method Elements\E310 e310(\stdClass $std) Constructor element E310
 * @method Elements\E311 e311(\stdClass $std) Constructor element E311
 * @method Elements\E312 e312(\stdClass $std) Constructor element E312
 * @method Elements\E313 e313(\stdClass $std) Constructor element E313
 * @method Elements\E316 e316(\stdClass $std) Constructor element E316
 * @method Elements\E500 e500(\stdClass $std) Constructor element E500
 * @method Elements\E510 e510(\stdClass $std) Constructor element E510
 * @method Elements\E520 e520(\stdClass $std) Constructor element E520
 * @method Elements\E530 e530(\stdClass $std) Constructor element E530
 * @method Elements\E531 e531(\stdClass $std) Constructor element E531
 */
final class BlockE extends Block implements BlockInterface
{
    const TOTAL = 'E990';

    public $elements = [
        'e001' => ['class' => Elements\E001::class, 'level' => 1, 'type' => 'single'],
        'e100' => ['class' => Elements\E100::class, 'level' => 2, 'type' => 'multiple'],
        'e110' => ['class' => Elements\E110::class, 'level' => 3, 'type' => 'single'],
        'e111' => ['class' => Elements\E111::class, 'level' => 4, 'type' => 'multiple'],
        'e112' => ['class' => Elements\E112::class, 'level' => 5, 'type' => 'multiple'],
        'e113' => ['class' => Elements\E113::class, 'level' => 5, 'type' => 'multiple'],
        'e115' => ['class' => Elements\E115::class, 'level' => 4, 'type' => 'multiple'],
        'e116' => ['class' => Elements\E116::class, 'level' => 4, 'type' => 'multiple'],
        'e200' => ['class' => Elements\E200::class, 'level' => 2, 'type' => 'multiple'],
        'e210' => ['class' => Elements\E210::class, 'level' => 3, 'type' => 'single'],
        'e220' => ['class' => Elements\E220::class, 'level' => 4, 'type' => 'multiple'],
        'e230' => ['class' => Elements\E230::class, 'level' => 5, 'type' => 'multiple'],
        'e240' => ['class' => Elements\E240::class, 'level' => 5, 'type' => 'multiple'],
        'e250' => ['class' => Elements\E250::class, 'level' => 4, 'type' => 'multiple'],
        'e300' => ['class' => Elements\E300::class, 'level' => 2, 'type' => 'multiple'],
        'e310' => ['class' => Elements\E310::class, 'level' => 3, 'type' => 'single'],
        'e311' => ['class' => Elements\E311::class, 'level' => 4, 'type' => 'multiple'],
        'e312' => ['class' => Elements\E312::class, 'level' => 5, 'type' => 'multiple'],
        'e313' => ['class' => Elements\E313::class, 'level' => 5, 'type' => 'multiple'],
        'e316' => ['class' => Elements\E316::class, 'level' => 4, 'type' => 'multiple'],
        'e500' => ['class' => Elements\E500::class, 'level' => 2, 'type' => 'multiple'],
        'e510' => ['class' => Elements\E510::class, 'level' => 3, 'type' => 'multiple'],
        'e520' => ['class' => Elements\E520::class, 'level' => 3, 'type' => 'single'],
        'e530' => ['class' => Elements\E530::class, 'level' => 4, 'type' => 'multiple'],
        'e531' => ['class' => Elements\E531::class, 'level' => 5, 'type' => 'multiple'],
    ];
}
