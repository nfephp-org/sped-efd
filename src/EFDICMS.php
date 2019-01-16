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
        'block0' => ['class' => Blocks\ICMSIPI\Block0::class, 'order' => 1],
        'blockb' => ['class' => Blocks\ICMSIPI\BlockB::class, 'order' => 2],
        'blockc' => ['class' => Blocks\ICMSIPI\BlockC::class, 'order' => 3],
        'blockd' => ['class' => Blocks\ICMSIPI\BlockD::class, 'order' => 4],
        'blocke' => ['class' => Blocks\ICMSIPI\BlockE::class, 'order' => 5],
        'blockg' => ['class' => Blocks\ICMSIPI\BlockG::class, 'order' => 6],
        'blockh' => ['class' => Blocks\ICMSIPI\BlockH::class, 'order' => 7],
        'blockk' => ['class' => Blocks\ICMSIPI\BlockK::class, 'order' => 8],
        'block1' => ['class' => Blocks\ICMSIPI\Block1::class, 'order' => 9],
    ];
}
