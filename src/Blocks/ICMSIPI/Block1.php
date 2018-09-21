<?php

namespace NFePHP\EFD\Blocks\ICMSIPI;

use NFePHP\EFD\Elements\ICMSIPI as Elements;
use NFePHP\EFD\Common\Block;
use NFePHP\EFD\Common\BlockInterface;

/**
 * Classe constutora do bloco 1
 *
 * Esta classe irá usar um recurso para invocar as classes de cada um dos elementos
 * constituintes listados
 */
final class Block1 extends Block implements BlockInterface
{
    const TOTAL = '1990';
    
    public $elements = [
        'z1001' => ['class' => Elements\Z1001::class, 'level' => 1, 'type' => 'single'],
        'z1010' => ['class' => Elements\Z1010::class, 'level' => 2, 'type' => 'single'],
        'z1100' => ['class' => Elements\Z1100::class, 'level' => 2, 'type' => 'multiple'],
        'z1105' => ['class' => Elements\Z1105::class, 'level' => 3, 'type' => 'multiple'],
        'z1110' => ['class' => Elements\Z1110::class, 'level' => 4, 'type' => 'multiple'],
        'z1200' => ['class' => Elements\Z1200::class, 'level' => 2, 'type' => 'multiple'],
        'z1210' => ['class' => Elements\Z1210::class, 'level' => 3, 'type' => 'multiple'],
        'z1300' => ['class' => Elements\Z1300::class, 'level' => 2, 'type' => 'multiple'],
        'z1310' => ['class' => Elements\Z1310::class, 'level' => 3, 'type' => 'multiple'],
        'z1320' => ['class' => Elements\Z1320::class, 'level' => 4, 'type' => 'multiple'],
        'z1350' => ['class' => Elements\Z1350::class, 'level' => 2, 'type' => 'multiple'],
        'z1360' => ['class' => Elements\Z1360::class, 'level' => 3, 'type' => 'multiple'],
        'z1370' => ['class' => Elements\Z1370::class, 'level' => 3, 'type' => 'multiple'],
        'z1390' => ['class' => Elements\Z1390::class, 'level' => 2, 'type' => 'multiple'],
        'z1391' => ['class' => Elements\Z1391::class, 'level' => 3, 'type' => 'multiple'],
        'z1400' => ['class' => Elements\Z1400::class, 'level' => 2, 'type' => 'multiple'],
        'z1500' => ['class' => Elements\Z1500::class, 'level' => 2, 'type' => 'multiple'],
        'z1510' => ['class' => Elements\Z1510::class, 'level' => 3, 'type' => 'multiple'],
        'z1600' => ['class' => Elements\Z1600::class, 'level' => 2, 'type' => 'multiple'],
        'z1700' => ['class' => Elements\Z1700::class, 'level' => 2, 'type' => 'multiple'],
        'z1710' => ['class' => Elements\Z1710::class, 'level' => 3, 'type' => 'multiple'],
        'z1800' => ['class' => Elements\Z1800::class, 'level' => 2, 'type' => 'single'],
        'z1900' => ['class' => Elements\Z1900::class, 'level' => 2, 'type' => 'multiple'],
        'z1910' => ['class' => Elements\Z1910::class, 'level' => 3, 'type' => 'multiple'],
        'z1920' => ['class' => Elements\Z1920::class, 'level' => 4, 'type' => 'single'],
        'z1921' => ['class' => Elements\Z1921::class, 'level' => 5, 'type' => 'multiple'],
        'z1922' => ['class' => Elements\Z1922::class, 'level' => 6, 'type' => 'multiple'],
        'z1923' => ['class' => Elements\Z1923::class, 'level' => 6, 'type' => 'multiple'],
        'z1925' => ['class' => Elements\Z1925::class, 'level' => 5, 'type' => 'multiple'],
        'z1926' => ['class' => Elements\Z1926::class, 'level' => 5, 'type' => 'multiple'],
        'z1960' => ['class' => Elements\Z1960::class, 'level' => 2, 'type' => 'multiple'],
        'z1970' => ['class' => Elements\Z1970::class, 'level' => 2, 'type' => 'multiple'],
        'z1975' => ['class' => Elements\Z1975::class, 'level' => 3, 'type' => 'multiple'],
        'z1980' => ['class' => Elements\Z1980::class, 'level' => 2, 'type' => 'single']
        
    ];
    
    public function __construct()
    {
        parent::__construct(self::TOTAL);
    }
}
