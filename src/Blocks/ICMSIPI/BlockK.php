<?php

namespace NFePHP\EFD\Blocks\ICMSIPI;

use NFePHP\EFD\Elements\ICMSIPI as Elements;
use NFePHP\EFD\Common\Block;
use NFePHP\EFD\Common\BlockInterface;

/**
 * Classe constutora do bloco K
 *
 * Esta classe irá usar um recurso para invocar as classes de cada um dos elementos
 * constituintes listados
 *
 * @method Elements\K001 k001(\stdClass $std) Constructor element K001
 * @method Elements\K100 k100(\stdClass $std) Constructor element K100
 * @method Elements\K200 k200(\stdClass $std) Constructor element K200
 * @method Elements\K210 k210(\stdClass $std) Constructor element K210
 * @method Elements\K215 k215(\stdClass $std) Constructor element K215
 * @method Elements\K220 k220(\stdClass $std) Constructor element K220
 * @method Elements\K230 k230(\stdClass $std) Constructor element K230
 * @method Elements\K235 k235(\stdClass $std) Constructor element K235
 * @method Elements\K250 k250(\stdClass $std) Constructor element K250
 * @method Elements\K255 k255(\stdClass $std) Constructor element K255
 * @method Elements\K260 k260(\stdClass $std) Constructor element K260
 * @method Elements\K265 k265(\stdClass $std) Constructor element K265
 * @method Elements\K270 k270(\stdClass $std) Constructor element K270
 * @method Elements\K275 k275(\stdClass $std) Constructor element K275
 * @method Elements\K280 k280(\stdClass $std) Constructor element K280
 */
final class BlockK extends Block implements BlockInterface
{
    const TOTAL = 'K990';
    
    public $elements = [
        'k001' => ['class' => Elements\K001::class, 'level' => 1, 'type' => 'single'],
        'k100' => ['class' => Elements\K100::class, 'level' => 2, 'type' => 'multiple'],
        'k200' => ['class' => Elements\K200::class, 'level' => 3, 'type' => 'multiple'],
        'k210' => ['class' => Elements\K210::class, 'level' => 3, 'type' => 'multiple'],
        'k215' => ['class' => Elements\K215::class, 'level' => 4, 'type' => 'multiple'],
        'k220' => ['class' => Elements\K220::class, 'level' => 3, 'type' => 'multiple'],
        'k230' => ['class' => Elements\K230::class, 'level' => 3, 'type' => 'multiple'],
        'k235' => ['class' => Elements\K235::class, 'level' => 4, 'type' => 'multiple'],
        'k250' => ['class' => Elements\K250::class, 'level' => 3, 'type' => 'multiple'],
        'k255' => ['class' => Elements\K255::class, 'level' => 4, 'type' => 'multiple'],
        'k260' => ['class' => Elements\K260::class, 'level' => 3, 'type' => 'multiple'],
        'k265' => ['class' => Elements\K265::class, 'level' => 4, 'type' => 'multiple'],
        'k270' => ['class' => Elements\K270::class, 'level' => 3, 'type' => 'multiple'],
        'k275' => ['class' => Elements\K275::class, 'level' => 4, 'type' => 'multiple'],
        'k280' => ['class' => Elements\K280::class, 'level' => 3, 'type' => 'multiple']
    ];
    
    public function __construct()
    {
        parent::__construct(self::TOTAL);
    }
}
