<?php

namespace NFePHP\EFD\Blocks\ICMSIPI;

use NFePHP\EFD\Elements\ICMSIPI as Elements;
use NFePHP\EFD\Common\Block;

/**
 * Classe constutora do bloco D
 *
 * Esta classe irá usar um recurso para invocar as classes de cada um dos elementos
 * constituintes listados
 *
 * @method Elements\D001 d001(\stdClass $std) Constructor element D001
 * @method Elements\D100 d100(\stdClass $std) Constructor element D100
 * @method Elements\D101 d101(\stdClass $std) Constructor element D101
 * @method Elements\D110 d110(\stdClass $std) Constructor element D110
 * @method Elements\D120 d120(\stdClass $std) Constructor element D120
 * @method Elements\D130 d130(\stdClass $std) Constructor element D130
 * @method Elements\D140 d140(\stdClass $std) Constructor element D140
 * @method Elements\D150 d150(\stdClass $std) Constructor element D150
 * @method Elements\D160 d160(\stdClass $std) Constructor element D160
 * @method Elements\D161 d161(\stdClass $std) Constructor element D161
 * @method Elements\D162 d162(\stdClass $std) Constructor element D162
 * @method Elements\D170 d170(\stdClass $std) Constructor element D170
 * @method Elements\D180 d180(\stdClass $std) Constructor element D180
 * @method Elements\D190 d190(\stdClass $std) Constructor element D190
 * @method Elements\D195 d195(\stdClass $std) Constructor element D195
 * @method Elements\D197 d197(\stdClass $std) Constructor element D197
 * @method Elements\D300 d300(\stdClass $std) Constructor element D300
 * @method Elements\D301 d301(\stdClass $std) Constructor element D301
 * @method Elements\D310 d310(\stdClass $std) Constructor element D310
 * @method Elements\D350 d350(\stdClass $std) Constructor element D350
 * @method Elements\D355 d355(\stdClass $std) Constructor element D355
 * @method Elements\D360 d360(\stdClass $std) Constructor element D360
 * @method Elements\D365 d365(\stdClass $std) Constructor element D365
 * @method Elements\D370 d370(\stdClass $std) Constructor element D370
 * @method Elements\D390 d390(\stdClass $std) Constructor element D390
 * @method Elements\D400 d400(\stdClass $std) Constructor element D400
 * @method Elements\D410 d410(\stdClass $std) Constructor element D410
 * @method Elements\D411 d411(\stdClass $std) Constructor element D411
 * @method Elements\D420 d420(\stdClass $std) Constructor element D420
 * @method Elements\D500 d500(\stdClass $std) Constructor element D500
 * @method Elements\D510 d510(\stdClass $std) Constructor element D510
 * @method Elements\D530 d530(\stdClass $std) Constructor element D530
 * @method Elements\D590 d590(\stdClass $std) Constructor element D590
 * @method Elements\D600 d600(\stdClass $std) Constructor element D600
 * @method Elements\D610 d610(\stdClass $std) Constructor element D610
 * @method Elements\D690 d690(\stdClass $std) Constructor element D690
 * @method Elements\D695 d695(\stdClass $std) Constructor element D695
 * @method Elements\D696 d696(\stdClass $std) Constructor element D696
 * @method Elements\D697 d697(\stdClass $std) Constructor element D697
 */
final class BlockD extends Block
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

    public function __construct(string $layout = null)
    {
        $this->grupo = 'ICMSIPI';
        parent::__construct($layout);
        $this->elementTotal = 'D990';
    }
}
