<?php

namespace NFePHP\EFD\Blocks\ICMSIPI;

use NFePHP\EFD\Elements\ICMSIPI as Elements;
use NFePHP\EFD\Common\Block;
use NFePHP\EFD\Common\BlockInterface;

/**
 * Classe constutora do bloco C
 *
 * Esta classe irá usar um recurso para invocar as classes de cada um dos elementos
 * constituintes listados
 */
final class BlockC extends Block implements BlockInterface
{
    const TOTAL = 'C990';
    
    public $elements = [
        'C001' => ['class' => Elements\C001::class, 'level' => 1, 'type' => 'single'],
        'C100' => ['class' => Elements\C100::class, 'level' => 2, 'type' => 'multiple'],
        'C101' => ['class' => Elements\C101::class, 'level' => 3, 'type' => 'single'],
        'C105' => ['class' => Elements\C105::class, 'level' => 3, 'type' => 'single'],
        'C110' => ['class' => Elements\C110::class, 'level' => 3, 'type' => 'multiple'],
        'C111' => ['class' => Elements\C111::class, 'level' => 4, 'type' => 'multiple'],
        'C112' => ['class' => Elements\C112::class, 'level' => 4, 'type' => 'multiple'],
        'C113' => ['class' => Elements\C113::class, 'level' => 4, 'type' => 'multiple'],
        'C114' => ['class' => Elements\C114::class, 'level' => 4, 'type' => 'multiple'],
        'C115' => ['class' => Elements\C115::class, 'level' => 4, 'type' => 'multiple'],
        'C116' => ['class' => Elements\C116::class, 'level' => 4, 'type' => 'multiple'],
        'C120' => ['class' => Elements\C120::class, 'level' => 3, 'type' => 'multiple'],
        'C130' => ['class' => Elements\C130::class, 'level' => 3, 'type' => 'single'],
        'C140' => ['class' => Elements\C140::class, 'level' => 3, 'type' => 'single'],
        'C141' => ['class' => Elements\C141::class, 'level' => 4, 'type' => 'multiple'],
        'C160' => ['class' => Elements\C160::class, 'level' => 3, 'type' => 'single'],
        'C165' => ['class' => Elements\C165::class, 'level' => 3, 'type' => 'multiple'],
        'C170' => ['class' => Elements\C170::class, 'level' => 3, 'type' => 'multiple'],
        'C171' => ['class' => Elements\C171::class, 'level' => 4, 'type' => 'multiple'],
        'C172' => ['class' => Elements\C172::class, 'level' => 4, 'type' => 'single'],
        'C173' => ['class' => Elements\C173::class, 'level' => 4, 'type' => 'multiple'],
        'C174' => ['class' => Elements\C174::class, 'level' => 4, 'type' => 'multiple'],
        'C175' => ['class' => Elements\C175::class, 'level' => 4, 'type' => 'multiple'],
        'C176' => ['class' => Elements\C176::class, 'level' => 4, 'type' => 'multiple'],
        'C177' => ['class' => Elements\C177::class, 'level' => 4, 'type' => 'single'],
        'C178' => ['class' => Elements\C178::class, 'level' => 4, 'type' => 'single'],
        'C179' => ['class' => Elements\C179::class, 'level' => 4, 'type' => 'single'],
        'C190' => ['class' => Elements\C190::class, 'level' => 3, 'type' => 'multiple'],
        'C191' => ['class' => Elements\C191::class, 'level' => 4, 'type' => 'single'],
        'C195' => ['class' => Elements\C195::class, 'level' => 3, 'type' => 'multiple'],
        'C197' => ['class' => Elements\C197::class, 'level' => 4, 'type' => 'multiple'],
        'C300' => ['class' => Elements\C300::class, 'level' => 2, 'type' => 'multiple'],
        'C310' => ['class' => Elements\C310::class, 'level' => 3, 'type' => 'multiple'],
        'C320' => ['class' => Elements\C320::class, 'level' => 3, 'type' => 'multiple'],
        'C321' => ['class' => Elements\C321::class, 'level' => 4, 'type' => 'multiple'],
        'C350' => ['class' => Elements\C350::class, 'level' => 2, 'type' => 'multiple'],
        'C370' => ['class' => Elements\C370::class, 'level' => 3, 'type' => 'multiple'],
        'C390' => ['class' => Elements\C390::class, 'level' => 3, 'type' => 'multiple'],
        'C400' => ['class' => Elements\C400::class, 'level' => 2, 'type' => 'multiple'],
        'C405' => ['class' => Elements\C405::class, 'level' => 3, 'type' => 'multiple'],
        'C410' => ['class' => Elements\C410::class, 'level' => 4, 'type' => 'single'],
        'C420' => ['class' => Elements\C420::class, 'level' => 4, 'type' => 'multiple'],
        'C425' => ['class' => Elements\C425::class, 'level' => 5, 'type' => 'multiple'],
        'C460' => ['class' => Elements\C460::class, 'level' => 4, 'type' => 'multiple'],
        'C465' => ['class' => Elements\C465::class, 'level' => 5, 'type' => 'single'],
        'C470' => ['class' => Elements\C470::class, 'level' => 5, 'type' => 'multiple'],
        'C490' => ['class' => Elements\C490::class, 'level' => 4, 'type' => 'multiple'],
        'C495' => ['class' => Elements\C495::class, 'level' => 2, 'type' => 'multiple'],
        'C500' => ['class' => Elements\C500::class, 'level' => 2, 'type' => 'multiple'],
        'C510' => ['class' => Elements\C510::class, 'level' => 3, 'type' => 'multiple'],
        'C590' => ['class' => Elements\C590::class, 'level' => 3, 'type' => 'multiple'],
        'C600' => ['class' => Elements\C600::class, 'level' => 2, 'type' => 'multiple'],
        'C601' => ['class' => Elements\C601::class, 'level' => 3, 'type' => 'multiple'],
        'C610' => ['class' => Elements\C610::class, 'level' => 3, 'type' => 'multiple'],
        'C690' => ['class' => Elements\C690::class, 'level' => 3, 'type' => 'multiple'],
        'C700' => ['class' => Elements\C700::class, 'level' => 2, 'type' => 'multiple'],
        'C790' => ['class' => Elements\C790::class, 'level' => 3, 'type' => 'multiple'],
        'C791' => ['class' => Elements\C791::class, 'level' => 4, 'type' => 'multiple'],
        'C800' => ['class' => Elements\C800::class, 'level' => 2, 'type' => 'multiple'],
        'C850' => ['class' => Elements\C850::class, 'level' => 3, 'type' => 'multiple'],
        'C860' => ['class' => Elements\C860::class, 'level' => 2, 'type' => 'multiple'],
        'C890' => ['class' => Elements\C890::class, 'level' => 3, 'type' => 'multiple']
    ];
    
    public function __construct()
    {
        parent::__construct(self::TOTAL);
    }
}
