<?php

namespace NFePHP\EFD;

/**
 * Classe construtora do arquivo EFD Contribuições
 *
 * Esta classe recebe as classes listadas com o metodo add() e
 * executa o processo de construção final do arquivo
 */
final class EFDCont extends EFD
{
    public $possibles = [
        'block0' => ['class' => Blocks\Contribuicoes\Block0::class, 'order' => 1],
        'blocka' => ['class' => Blocks\Contribuicoes\BlockA::class, 'order' => 2],
        'blockc' => ['class' => Blocks\Contribuicoes\BlockC::class, 'order' => 3],
        'blockd' => ['class' => Blocks\Contribuicoes\BlockD::class, 'order' => 4],
        'blockf' => ['class' => Blocks\Contribuicoes\BlockF::class, 'order' => 5],
        'blocki' => ['class' => Blocks\Contribuicoes\BlockI::class, 'order' => 6],
        'blockm' => ['class' => Blocks\Contribuicoes\BlockM::class, 'order' => 7],
        'blockp' => ['class' => Blocks\Contribuicoes\BlockP::class, 'order' => 8],
        'block1' => ['class' => Blocks\Contribuicoes\Block1::class, 'order' => 9]
    ];
}
