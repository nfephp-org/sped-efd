<?php

namespace NFePHP\EFD\Blocks\ICMSIPI;

use NFePHP\EFD\Elements\ICMSIPI as Elements;
use NFePHP\EFD\Common\Block;
use NFePHP\EFD\Common\BlockInterface;

/**
 * Classe constutora do bloco H
 *
 * Esta classe irá usar um recurso para invocar as classes de cada um dos elementos
 * constituintes listados
 *
 * @method Elements\H001 h001(\stdClass $std) Constructor element H001
 * @method Elements\H005 h005(\stdClass $std) Constructor element H005
 * @method Elements\H010 h010(\stdClass $std) Constructor element H010
 * @method Elements\H020 h020(\stdClass $std) Constructor element H020
 * @method Elements\H030 h030(\stdClass $std) Constructor element H030
 */
final class BlockH extends Block implements BlockInterface
{
    const TOTAL = 'H990';

    public $elements = [
        'h001' => ['class' => Elements\H001::class, 'level' => 1, 'type' => 'single'],
        'h005' => ['class' => Elements\H005::class, 'level' => 2, 'type' => 'single'],
        'h010' => ['class' => Elements\H010::class, 'level' => 3, 'type' => 'multiple'],
        'h020' => ['class' => Elements\H020::class, 'level' => 4, 'type' => 'multiple'],
        'h030' => ['class' => Elements\H030::class, 'level' => 4, 'type' => 'single'],
    ];
}
