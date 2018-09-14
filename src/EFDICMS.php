<?php

namespace NFePHP\EFD;

use NFePHP\EFD\EFD;

/**
 * Classe construtora do arquivo EFD ICMS/IPI
 *
 * Esta classe recebe as classes listadas com o metodo add() e
 * executa o processo de construção final do arquivo
 */
final class EFDICMS extends EFD
{
    protected $possibles = [
        'block0' => ['class' => Blocks\Block0::class, 'order' => 1],
        'block1' => ['class' => Blocks\Block1::class, 'order' => 2],
        'blockb' => ['class' => Blocks\BlockB::class, 'order' => 3],
        'blockc' => ['class' => Blocks\BlockC::class, 'order' => 4],
        'blockd' => ['class' => Blocks\BlockD::class, 'order' => 5],
        'blocke' => ['class' => Blocks\BlockE::class, 'order' => 6],
        'blockg' => ['class' => Blocks\BlockG::class, 'order' => 7],
        'blockh' => ['class' => Blocks\BlockH::class, 'order' => 8],
        'blockk' => ['class' => Blocks\BlockK::class, 'order' => 9]
    ];
}
