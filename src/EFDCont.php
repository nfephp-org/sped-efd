<?php

namespace NFePHP\EFD;

use NFePHP\EFD\EFD;
use NFePHP\EFD\Blocks\BlockInterface;

/**
 * Classe construtora do arquivo EFD Contribuições
 * 
 * Esta classe recebe as classes listadas com o metodo add() e 
 * executa o processo de construção final do arquivo
 */
final class EFDCont extends EFD
{
    protected $possible = [
        'cont0' => ['class' =>Blocks\Cont0::class, 'order' => 1],
        'conta' => ['class' =>Blocks\ContA::class, 'order' => 2],
        'contc' => ['class' =>Blocks\ContC::class, 'order' => 3],
        'contd' => ['class' =>Blocks\ContD::class, 'order' => 4],
        'contf' => ['class' =>Blocks\ContF::class, 'order' => 5],
        'conti' => ['class' =>Blocks\ContI::class, 'order' => 6],
        'contm' => ['class' =>Blocks\ContM::class, 'order' => 7],
        'contp' => ['class' =>Blocks\ContP::class, 'order' => 8],
        'cont1' => ['class' =>Blocks\Cont1::class, 'order' => 9]
    ];
}
