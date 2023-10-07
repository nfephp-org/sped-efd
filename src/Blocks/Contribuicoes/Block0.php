<?php

namespace NFePHP\EFD\Blocks\Contribuicoes;

use NFePHP\EFD\Elements\Contribuicoes as Elements;
use NFePHP\EFD\Common\Block;

/**
 * Classe constutora do bloco 0 (inicial) EFD Contribuições
 *
 * Esta classe irá usar um recurso para invocar as classes de cada um dos elementos
 * constituintes listados.
 * NOTA: usada a letra z no inicio do elemento devido ao fato de não poder chamar classes
 * apenas com numeros e também para não confundir com os elementos do bloco B
 *
 * @method Elements\Z0000 z0000(\stdClass $std) Constructor element 0000
 * @method Elements\Z0001 z0001(\stdClass $std) Constructor element 0001
 * @method Elements\Z0035 z0035(\stdClass $std) Constructor element 0035
 * @method Elements\Z0100 z0100(\stdClass $std) Constructor element 0100
 * @method Elements\Z0110 z0110(\stdClass $std) Constructor element 0110
 * @method Elements\Z0111 z0111(\stdClass $std) Constructor element 0111
 * @method Elements\Z0120 z0120(\stdClass $std) Constructor element 0120
 * @method Elements\Z0140 z0140(\stdClass $std) Constructor element 0140
 * @method Elements\Z0145 z0145(\stdClass $std) Constructor element 0145
 * @method Elements\Z0150 z0150(\stdClass $std) Constructor element 0150
 * @method Elements\Z0190 z0190(\stdClass $std) Constructor element 0190
 * @method Elements\Z0200 z0200(\stdClass $std) Constructor element 0200
 * @method Elements\Z0205 z0205(\stdClass $std) Constructor element 0205
 * @method Elements\Z0206 z0206(\stdClass $std) Constructor element 0206
 * @method Elements\Z0208 z0208(\stdClass $std) Constructor element 0208
 * @method Elements\Z0400 z0400(\stdClass $std) Constructor element 0400
 * @method Elements\Z0450 z0450(\stdClass $std) Constructor element 0450
 * @method Elements\Z0500 z0500(\stdClass $std) Constructor element 0500
 * @method Elements\Z0600 z0600(\stdClass $std) Constructor element 0600
 */
final class Block0 extends Block
{
    const TOTAL = '0990';

    public $elements = [
        'z0000' => ['class' => Elements\Z0000::class, 'level' => 0, 'type' => 'single'],
        'z0001' => ['class' => Elements\Z0001::class, 'level' => 1, 'type' => 'single'],
        'z0035' => ['class' => Elements\Z0035::class, 'level' => 2, 'type' => 'single'],
        'z0100' => ['class' => Elements\Z0100::class, 'level' => 2, 'type' => 'single'],
        'z0110' => ['class' => Elements\Z0110::class, 'level' => 2, 'type' => 'multiple'],
        'z0111' => ['class' => Elements\Z0111::class, 'level' => 3, 'type' => 'multiple'],
        'z0120' => ['class' => Elements\Z0120::class, 'level' => 2, 'type' => 'multiple'],
        'z0140' => ['class' => Elements\Z0140::class, 'level' => 2, 'type' => 'multiple'],
        'z0145' => ['class' => Elements\Z0145::class, 'level' => 3, 'type' => 'multiple'],
        'z0150' => ['class' => Elements\Z0150::class, 'level' => 3, 'type' => 'single'],
        'z0190' => ['class' => Elements\Z0190::class, 'level' => 3, 'type' => 'multiple'],
        'z0200' => ['class' => Elements\Z0200::class, 'level' => 3, 'type' => 'multiple'],
        'z0205' => ['class' => Elements\Z0205::class, 'level' => 3, 'type' => 'multiple'],
        'z0206' => ['class' => Elements\Z0206::class, 'level' => 3, 'type' => 'multiple'],
        'z0208' => ['class' => Elements\Z0208::class, 'level' => 3, 'type' => 'multiple'],
        'z0400' => ['class' => Elements\Z0400::class, 'level' => 2, 'type' => 'multiple'],
        'z0450' => ['class' => Elements\Z0450::class, 'level' => 3, 'type' => 'single'],
        'z0500' => ['class' => Elements\Z0500::class, 'level' => 2, 'type' => 'multiple'],
        'z0600' => ['class' => Elements\Z0600::class, 'level' => 2, 'type' => 'multiple']
    ];

    public function __construct(string $layout = null)
    {
        $this->grupo = 'Contribuicoes';
        parent::__construct($layout);
        $this->elementTotal = '0990';
    }
}
