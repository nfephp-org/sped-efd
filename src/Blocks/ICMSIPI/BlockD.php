<?php

namespace NFePHP\EFD\Blocks\ICMSIPI;

use NFePHP\EFD\Elements\ICMSIPI as Elements;
use NFePHP\EFD\Common\Block;
use NFePHP\EFD\Common\BlockInterface;

/**
 * Classe constutora do bloco D
 *
 * Esta classe irá usar um recurso para invocar as classes de cada um dos elementos
 * constituintes listados
 */
final class BlockD extends Block implements BlockInterface
{
    const TOTAL = 'D990';
    
    public $elements = [
        'D001' => ['class' => Elements\D001::class, 'level' => 1, 'type' => 'single'],
        'D100' => ['class' => Elements\D100::class, 'level' => 2, 'type' => 'multiple'],
        'D101' => ['class' => Elements\D101::class, 'level' => 3, 'type' => 'single'],
        'D110' => ['class' => Elements\D110::class, 'level' => 3, 'type' => 'multiple'],
        'D120' => ['class' => Elements\D120::class, 'level' => 4, 'type' => 'multiple'],
        'D130' => ['class' => Elements\D130::class, 'level' => 3, 'type' => 'multiple'],
        'D140' => ['class' => Elements\D140::class, 'level' => 3, 'type' => 'single'],
        'D150' => ['class' => Elements\D150::class, 'level' => 3, 'type' => 'single'],
        'D160' => ['class' => Elements\D160::class, 'level' => 3, 'type' => 'multiple'],
        'D161' => ['class' => Elements\D161::class, 'level' => 4, 'type' => 'single'],
        'D162' => ['class' => Elements\D162::class, 'level' => 4, 'type' => 'multiple'],
        'D170' => ['class' => Elements\D170::class, 'level' => 3, 'type' => 'single'],
        'D180' => ['class' => Elements\D180::class, 'level' => 3, 'type' => 'multiple'],
        'D190' => ['class' => Elements\D190::class, 'level' => 3, 'type' => 'multiple'],
        'D195' => ['class' => Elements\D195::class, 'level' => 3, 'type' => 'multiple'],
        'D197' => ['class' => Elements\D197::class, 'level' => 4, 'type' => 'multiple'],
        'D300' => ['class' => Elements\D300::class, 'level' => 2, 'type' => 'multiple'],
        'D301' => ['class' => Elements\D301::class, 'level' => 3, 'type' => 'multiple'],
        'D310' => ['class' => Elements\D310::class, 'level' => 3, 'type' => 'multiple'],
        'D350' => ['class' => Elements\D350::class, 'level' => 2, 'type' => 'multiple'],
        'D355' => ['class' => Elements\D355::class, 'level' => 3, 'type' => 'multiple'],
        'D360' => ['class' => Elements\D360::class, 'level' => 4, 'type' => 'single'],
        'D365' => ['class' => Elements\D365::class, 'level' => 4, 'type' => 'multiple'],
        'D370' => ['class' => Elements\D370::class, 'level' => 5, 'type' => 'multiple'],
        'D390' => ['class' => Elements\D390::class, 'level' => 4, 'type' => 'multiple'],
        'D400' => ['class' => Elements\D400::class, 'level' => 2, 'type' => 'multiple'],
        'D410' => ['class' => Elements\D410::class, 'level' => 3, 'type' => 'multiple'],
        'D411' => ['class' => Elements\D411::class, 'level' => 4, 'type' => 'multiple'],
        'D420' => ['class' => Elements\D420::class, 'level' => 3, 'type' => 'multiple'],
        'D500' => ['class' => Elements\D500::class, 'level' => 2, 'type' => 'multiple'],
        'D510' => ['class' => Elements\D510::class, 'level' => 3, 'type' => 'multiple'],
        'D530' => ['class' => Elements\D530::class, 'level' => 3, 'type' => 'multiple'],
        'D590' => ['class' => Elements\D590::class, 'level' => 3, 'type' => 'multiple'],
        'D600' => ['class' => Elements\D600::class, 'level' => 2, 'type' => 'multiple'],
        'D610' => ['class' => Elements\D610::class, 'level' => 3, 'type' => 'multiple'],
        'D690' => ['class' => Elements\D690::class, 'level' => 3, 'type' => 'multiple'],
        'D695' => ['class' => Elements\D695::class, 'level' => 2, 'type' => 'multiple'],
        'D696' => ['class' => Elements\D696::class, 'level' => 3, 'type' => 'multiple'],
        'D697' => ['class' => Elements\D697::class, 'level' => 4, 'type' => 'multiple']
    ];
    
    public function __construct()
    {
        parent::__construct(self::TOTAL);
    }
}
