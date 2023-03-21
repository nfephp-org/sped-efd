<?php

namespace NFePHP\EFD\Blocks\ICMSIPI;

use NFePHP\EFD\Elements\ICMSIPI as Elements;
use NFePHP\EFD\Common\Block;
use NFePHP\EFD\Common\BlockInterface;

/**
 * Classe constutora do bloco 0 (inicial)
 *
 * Esta classe irá usar um recurso para invocar as classes de cada um dos elementos
 * constituintes listados
 *
 * NOTA: usada a letra z no inicio do elemento devido ao fato de não poder chamar classes
 * apenas com numeros e também para não confundir os com elementos do bloco B
 *
 * @method Elements\Z0000 z0000(\stdClass $std) Constructor element 0000
 * @method Elements\Z0001 z0001(\stdClass $std) Constructor element 0001
 * @method Elements\Z0002 z0002(\stdClass $std) Constructor element 0002
 * @method Elements\Z0005 z0005(\stdClass $std) Constructor element 0005
 * @method Elements\Z0015 z0015(\stdClass $std) Constructor element 0015
 * @method Elements\Z0100 z0100(\stdClass $std) Constructor element 0100
 * @method Elements\Z0150 z0150(\stdClass $std) Constructor element 0150
 * @method Elements\Z0175 z0175(\stdClass $std) Constructor element 0175
 * @method Elements\Z0190 z0190(\stdClass $std) Constructor element 0190
 * @method Elements\Z0200 z0200(\stdClass $std) Constructor element 0200
 * @method Elements\Z0205 z0205(\stdClass $std) Constructor element 0205
 * @method Elements\Z0206 z0206(\stdClass $std) Constructor element 0206
 * @method Elements\Z0210 z0210(\stdClass $std) Constructor element 0210
 * @method Elements\Z0220 z0220(\stdClass $std) Constructor element 0220
 * @method Elements\Z0221 z0221(\stdClass $std) Constructor element 0221
 * @method Elements\Z0300 z0300(\stdClass $std) Constructor element 0300
 * @method Elements\Z0305 z0305(\stdClass $std) Constructor element 0305
 * @method Elements\Z0400 z0400(\stdClass $std) Constructor element 0400
 * @method Elements\Z0450 z0450(\stdClass $std) Constructor element 0450
 * @method Elements\Z0460 z0460(\stdClass $std) Constructor element 0460
 * @method Elements\Z0500 z0500(\stdClass $std) Constructor element 0500
 * @method Elements\Z0600 z0600(\stdClass $std) Constructor element 0600
 */
final class Block0 extends Block implements BlockInterface
{
    const TOTAL = '0990';

    public $elements = [
        'z0000' => ['class' => Elements\Z0000::class, 'level' => 0, 'type' => 'single'],
        'z0001' => ['class' => Elements\Z0001::class, 'level' => 1, 'type' => 'single'],
        'z0002' => ['class' => Elements\Z0002::class, 'level' => 1, 'type' => 'single'],
        'z0005' => ['class' => Elements\Z0005::class, 'level' => 2, 'type' => 'single'],
        'z0015' => ['class' => Elements\Z0015::class, 'level' => 2, 'type' => 'multiple'],
        'z0100' => ['class' => Elements\Z0100::class, 'level' => 2, 'type' => 'single'],
        'z0150' => ['class' => Elements\Z0150::class, 'level' => 2, 'type' => 'multiple'],
        'z0175' => ['class' => Elements\Z0175::class, 'level' => 3, 'type' => 'multiple'],
        'z0190' => ['class' => Elements\Z0190::class, 'level' => 2, 'type' => 'multiple'],
        'z0200' => ['class' => Elements\Z0200::class, 'level' => 2, 'type' => 'multiple'],
        'z0205' => ['class' => Elements\Z0205::class, 'level' => 3, 'type' => 'multiple'],
        'z0206' => ['class' => Elements\Z0206::class, 'level' => 3, 'type' => 'single'],
        'z0210' => ['class' => Elements\Z0210::class, 'level' => 3, 'type' => 'multiple'],
        'z0220' => ['class' => Elements\Z0220::class, 'level' => 3, 'type' => 'multiple'],
        'z0221' => ['class' => Elements\Z0221::class, 'level' => 3, 'type' => 'multiple'],
        'z0300' => ['class' => Elements\Z0300::class, 'level' => 2, 'type' => 'multiple'],
        'z0305' => ['class' => Elements\Z0305::class, 'level' => 3, 'type' => 'single'],
        'z0400' => ['class' => Elements\Z0400::class, 'level' => 2, 'type' => 'multiple'],
        'z0450' => ['class' => Elements\Z0450::class, 'level' => 2, 'type' => 'multiple'],
        'z0460' => ['class' => Elements\Z0460::class, 'level' => 2, 'type' => 'multiple'],
        'z0500' => ['class' => Elements\Z0500::class, 'level' => 2, 'type' => 'multiple'],
        'z0600' => ['class' => Elements\Z0600::class, 'level' => 2, 'type' => 'multiple']
    ];

    public function __construct()
    {
        $this->elementTotal = '0990';
    }
}
