<?php

namespace NFePHP\EFD\Blocks\ICMSIPI;

use NFePHP\EFD\Elements\ICMSIPI as Elements;
use NFePHP\EFD\Common\Block;

/**
 * Classe constutora do bloco B
 *
 * Esta classe irá usar um recurso para invocar as classes de cada um dos elementos
 * constituintes listados
 * @method Elements\B001 b001(\stdClass $std) Constructor element B001
 * @method Elements\B020 b020(\stdClass $std) Constructor element B020
 * @method Elements\B025 b025(\stdClass $std) Constructor element B025
 * @method Elements\B030 b030(\stdClass $std) Constructor element B030
 * @method Elements\B035 b035(\stdClass $std) Constructor element B035
 * @method Elements\B350 b350(\stdClass $std) Constructor element B350
 * @method Elements\B420 b420(\stdClass $std) Constructor element B420
 * @method Elements\B440 b440(\stdClass $std) Constructor element B440
 * @method Elements\B460 b460(\stdClass $std) Constructor element B460
 * @method Elements\B470 b470(\stdClass $std) Constructor element B470
 * @method Elements\B500 b500(\stdClass $std) Constructor element B500
 * @method Elements\B510 b510(\stdClass $std) Constructor element B510
 *
 */
final class BlockB extends Block
{
    const TOTAL = 'B990';

    public $elements = [
        'b001' => ['class' => Elements\B001::class, 'level' => 1, 'type' => 'single'],
        'b020' => ['class' => Elements\B020::class, 'level' => 2, 'type' => 'multiple'],
        'b025' => ['class' => Elements\B025::class, 'level' => 3, 'type' => 'multiple'],
        'b030' => ['class' => Elements\B030::class, 'level' => 2, 'type' => 'multiple'],
        'b035' => ['class' => Elements\B035::class, 'level' => 3, 'type' => 'multiple'],
        'b350' => ['class' => Elements\B350::class, 'level' => 2, 'type' => 'multiple'],
        'b420' => ['class' => Elements\B420::class, 'level' => 2, 'type' => 'multiple'],
        'b440' => ['class' => Elements\B440::class, 'level' => 2, 'type' => 'multiple'],
        'b460' => ['class' => Elements\B460::class, 'level' => 2, 'type' => 'multiple'],
        'b470' => ['class' => Elements\B470::class, 'level' => 2, 'type' => 'single'],
        'b500' => ['class' => Elements\B500::class, 'level' => 2, 'type' => 'single'],
        'b510' => ['class' => Elements\B510::class, 'level' => 3, 'type' => 'multiple']
    ];

    public function __construct(string $layout = null)
    {
        $this->grupo = 'ICMSIPI';
        parent::__construct($layout);
        $this->elementTotal = 'B990';
    }
}
