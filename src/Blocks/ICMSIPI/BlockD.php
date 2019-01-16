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
        'd001' => ['class' => Elements\D001::class, 'level' => 1, 'type' => 'single'],
        'd100' => ['class' => Elements\D100::class, 'level' => 2, 'type' => 'multiple'],
        'd101' => ['class' => Elements\D101::class, 'level' => 3, 'type' => 'single'],
        'd110' => ['class' => Elements\D110::class, 'level' => 3, 'type' => 'multiple'],
        'd120' => ['class' => Elements\D120::class, 'level' => 4, 'type' => 'multiple'],
        'd130' => ['class' => Elements\D130::class, 'level' => 3, 'type' => 'multiple'],
        'd140' => ['class' => Elements\D140::class, 'level' => 3, 'type' => 'single'],
        'd150' => ['class' => Elements\D150::class, 'level' => 3, 'type' => 'single'],
        'd160' => ['class' => Elements\D160::class, 'level' => 3, 'type' => 'multiple'],
        'd161' => ['class' => Elements\D161::class, 'level' => 4, 'type' => 'single'],
        'd162' => ['class' => Elements\D162::class, 'level' => 4, 'type' => 'multiple'],
        'd170' => ['class' => Elements\D170::class, 'level' => 3, 'type' => 'single'],
        'd180' => ['class' => Elements\D180::class, 'level' => 3, 'type' => 'multiple'],
        'd190' => ['class' => Elements\D190::class, 'level' => 3, 'type' => 'multiple'],
        'd195' => ['class' => Elements\D195::class, 'level' => 3, 'type' => 'multiple'],
        'd197' => ['class' => Elements\D197::class, 'level' => 4, 'type' => 'multiple'],
        'd300' => ['class' => Elements\D300::class, 'level' => 2, 'type' => 'multiple'],
        'd301' => ['class' => Elements\D301::class, 'level' => 3, 'type' => 'multiple'],
        'd310' => ['class' => Elements\D310::class, 'level' => 3, 'type' => 'multiple'],
        'd350' => ['class' => Elements\D350::class, 'level' => 2, 'type' => 'multiple'],
        'd355' => ['class' => Elements\D355::class, 'level' => 3, 'type' => 'multiple'],
        'd360' => ['class' => Elements\D360::class, 'level' => 4, 'type' => 'single'],
        'd365' => ['class' => Elements\D365::class, 'level' => 4, 'type' => 'multiple'],
        'd370' => ['class' => Elements\D370::class, 'level' => 5, 'type' => 'multiple'],
        'd390' => ['class' => Elements\D390::class, 'level' => 4, 'type' => 'multiple'],
        'd400' => ['class' => Elements\D400::class, 'level' => 2, 'type' => 'multiple'],
        'd410' => ['class' => Elements\D410::class, 'level' => 3, 'type' => 'multiple'],
        'd411' => ['class' => Elements\D411::class, 'level' => 4, 'type' => 'multiple'],
        'd420' => ['class' => Elements\D420::class, 'level' => 3, 'type' => 'multiple'],
        'd500' => ['class' => Elements\D500::class, 'level' => 2, 'type' => 'multiple'],
        'd510' => ['class' => Elements\D510::class, 'level' => 3, 'type' => 'multiple'],
        'd530' => ['class' => Elements\D530::class, 'level' => 3, 'type' => 'multiple'],
        'd590' => ['class' => Elements\D590::class, 'level' => 3, 'type' => 'multiple'],
        'd600' => ['class' => Elements\D600::class, 'level' => 2, 'type' => 'multiple'],
        'd610' => ['class' => Elements\D610::class, 'level' => 3, 'type' => 'multiple'],
        'd690' => ['class' => Elements\D690::class, 'level' => 3, 'type' => 'multiple'],
        'd695' => ['class' => Elements\D695::class, 'level' => 2, 'type' => 'multiple'],
        'd696' => ['class' => Elements\D696::class, 'level' => 3, 'type' => 'multiple'],
        'd697' => ['class' => Elements\D697::class, 'level' => 4, 'type' => 'multiple']
    ];
    
    public function __construct()
    {
        parent::__construct(self::TOTAL);
    }
}
