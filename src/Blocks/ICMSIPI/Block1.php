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
 *
 * @method Elements\z1001 z1001(\stdClass $std) Constructor element 1001
 * @method Elements\z1010 z1010(\stdClass $std) Constructor element 1010
 * @method Elements\z1100 z1100(\stdClass $std) Constructor element 1100
 * @method Elements\z1105 z1105(\stdClass $std) Constructor element 1105
 * @method Elements\z1110 z1110(\stdClass $std) Constructor element 1110
 * @method Elements\z1200 z1200(\stdClass $std) Constructor element 1200
 * @method Elements\z1210 z1210(\stdClass $std) Constructor element 1210
 * @method Elements\z1250 z1250(\stdClass $std) Constructor element 1250
 * @method Elements\z1300 z1300(\stdClass $std) Constructor element 1300
 * @method Elements\z1310 z1310(\stdClass $std) Constructor element 1310
 * @method Elements\z1320 z1320(\stdClass $std) Constructor element 1320
 * @method Elements\z1350 z1350(\stdClass $std) Constructor element 1350
 * @method Elements\z1360 z1360(\stdClass $std) Constructor element 1360
 * @method Elements\z1370 z1370(\stdClass $std) Constructor element 1370
 * @method Elements\z1390 z1390(\stdClass $std) Constructor element 1390
 * @method Elements\z1391 z1391(\stdClass $std) Constructor element 1391
 * @method Elements\z1400 z1400(\stdClass $std) Constructor element 1400
 * @method Elements\z1500 z1500(\stdClass $std) Constructor element 1500
 * @method Elements\z1510 z1510(\stdClass $std) Constructor element 1510
 * @method Elements\z1600 z1600(\stdClass $std) Constructor element 1600
 * @method Elements\z1601 z1601(\stdClass $std) Constructor element 1601
 * @method Elements\z1700 z1700(\stdClass $std) Constructor element 1700
 * @method Elements\z1710 z1710(\stdClass $std) Constructor element 1710
 * @method Elements\z1800 z1800(\stdClass $std) Constructor element 1800
 * @method Elements\z1900 z1900(\stdClass $std) Constructor element 1900
 * @method Elements\z1910 z1910(\stdClass $std) Constructor element 1910
 * @method Elements\z1920 z1920(\stdClass $std) Constructor element 1920
 * @method Elements\z1921 z1921(\stdClass $std) Constructor element 1921
 * @method Elements\z1922 z1922(\stdClass $std) Constructor element 1922
 * @method Elements\z1923 z1923(\stdClass $std) Constructor element 1923
 * @method Elements\z1925 z1925(\stdClass $std) Constructor element 1925
 * @method Elements\z1926 z1926(\stdClass $std) Constructor element 1926
 * @method Elements\z1960 z1960(\stdClass $std) Constructor element 1960
 * @method Elements\z1970 z1970(\stdClass $std) Constructor element 1970
 * @method Elements\z1975 z1975(\stdClass $std) Constructor element 1975
 * @method Elements\z1980 z1980(\stdClass $std) Constructor element 1980
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
        'z1210' => ['class' => Elements\Z1210::class, 'level' => 2, 'type' => 'multiple'],
        'z1250' => ['class' => Elements\Z1255::class, 'level' => 2, 'type' => 'single'],
        'z1255' => ['class' => Elements\Z1250::class, 'level' => 3, 'type' => 'multiple'],
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
        'z1601' => ['class' => Elements\Z1601::class, 'level' => 2, 'type' => 'multiple'],
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
