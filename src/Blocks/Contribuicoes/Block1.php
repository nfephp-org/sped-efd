<?php

namespace NFePHP\EFD\Blocks\Contribuicoes;

use NFePHP\EFD\Elements\Contribuicoes as Elements;
use NFePHP\EFD\Common\Block;

/**
 * Classe constutora do bloco 1 EFD Contribuições
 *
 * @method Elements\Z1001 z1001(\stdClass $std) Constructor element 1001
 * @method Elements\Z1010 z1010(\stdClass $std) Constructor element 1010
 * @method Elements\Z1020 z1020(\stdClass $std) Constructor element 1020
 * @method Elements\Z1050 z1050(\stdClass $std) Constructor element 1050
 * @method Elements\Z1100 z1100(\stdClass $std) Constructor element 1100
 * @method Elements\Z1101 z1101(\stdClass $std) Constructor element 1101
 * @method Elements\Z1102 z1102(\stdClass $std) Constructor element 1102
 * @method Elements\Z1200 z1200(\stdClass $std) Constructor element 1200
 * @method Elements\Z1210 z1210(\stdClass $std) Constructor element 1210
 * @method Elements\Z1220 z1220(\stdClass $std) Constructor element 1220
 * @method Elements\Z1300 z1300(\stdClass $std) Constructor element 1300
 * @method Elements\Z1500 z1500(\stdClass $std) Constructor element 1500
 * @method Elements\Z1501 z1501(\stdClass $std) Constructor element 1501
 * @method Elements\Z1502 z1502(\stdClass $std) Constructor element 1502
 * @method Elements\Z1600 z1600(\stdClass $std) Constructor element 1600
 * @method Elements\Z1610 z1610(\stdClass $std) Constructor element 1610
 * @method Elements\Z1620 z1620(\stdClass $std) Constructor element 1620
 * @method Elements\Z1700 z1700(\stdClass $std) Constructor element 1700
 * @method Elements\Z1800 z1800(\stdClass $std) Constructor element 1800
 * @method Elements\Z1809 z1809(\stdClass $std) Constructor element 1809
 * @method Elements\Z1900 z1900(\stdClass $std) Constructor element 1900
 */
final class Block1 extends Block
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
        'z1610' => ['class' => Elements\Z1610::class, 'level' => 3, 'type' => 'multiple'],
        'z1620' => ['class' => Elements\Z1620::class, 'level' => 3, 'type' => 'multiple'],
        'z1700' => ['class' => Elements\Z1700::class, 'level' => 2, 'type' => 'multiple'],
        'z1800' => ['class' => Elements\Z1800::class, 'level' => 2, 'type' => 'multiple'],
        'z1809' => ['class' => Elements\Z1809::class, 'level' => 3, 'type' => 'multiple'],
        'z1900' => ['class' => Elements\Z1900::class, 'level' => 2, 'type' => 'multiple'],
    ];

    public function __construct(string $layout = null)
    {
        $this->grupo = 'Contribuicoes';
        parent::__construct($layout);
        $this->elementTotal = '1990';
    }
}
