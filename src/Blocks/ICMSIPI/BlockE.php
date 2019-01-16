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
        'e210' => ['class' => Elements\E200::class, 'level' => 3, 'type' => 'single'],
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
    
    public function __construct()
    {
        parent::__construct(self::TOTAL);
    }
}
