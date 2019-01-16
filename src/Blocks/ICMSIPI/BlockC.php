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
        'c001' => ['class' => Elements\C001::class, 'level' => 1, 'type' => 'single'],
        'c100' => ['class' => Elements\C100::class, 'level' => 2, 'type' => 'multiple'],
        'c101' => ['class' => Elements\C101::class, 'level' => 3, 'type' => 'single'],
        'c105' => ['class' => Elements\C105::class, 'level' => 3, 'type' => 'single'],
        'c110' => ['class' => Elements\C110::class, 'level' => 3, 'type' => 'multiple'],
        'c111' => ['class' => Elements\C111::class, 'level' => 4, 'type' => 'multiple'],
        'c112' => ['class' => Elements\C112::class, 'level' => 4, 'type' => 'multiple'],
        'c113' => ['class' => Elements\C113::class, 'level' => 4, 'type' => 'multiple'],
        'c114' => ['class' => Elements\C114::class, 'level' => 4, 'type' => 'multiple'],
        'c115' => ['class' => Elements\C115::class, 'level' => 4, 'type' => 'multiple'],
        'c116' => ['class' => Elements\C116::class, 'level' => 4, 'type' => 'multiple'],
        'c120' => ['class' => Elements\C120::class, 'level' => 3, 'type' => 'multiple'],
        'c130' => ['class' => Elements\C130::class, 'level' => 3, 'type' => 'single'],
        'c140' => ['class' => Elements\C140::class, 'level' => 3, 'type' => 'single'],
        'c141' => ['class' => Elements\C141::class, 'level' => 4, 'type' => 'multiple'],
        'c160' => ['class' => Elements\C160::class, 'level' => 3, 'type' => 'single'],
        'c165' => ['class' => Elements\C165::class, 'level' => 3, 'type' => 'multiple'],
        'c170' => ['class' => Elements\C170::class, 'level' => 3, 'type' => 'multiple'],
        'c171' => ['class' => Elements\C171::class, 'level' => 4, 'type' => 'multiple'],
        'c172' => ['class' => Elements\C172::class, 'level' => 4, 'type' => 'single'],
        'c173' => ['class' => Elements\C173::class, 'level' => 4, 'type' => 'multiple'],
        'c174' => ['class' => Elements\C174::class, 'level' => 4, 'type' => 'multiple'],
        'c175' => ['class' => Elements\C175::class, 'level' => 4, 'type' => 'multiple'],
        'c176' => ['class' => Elements\C176::class, 'level' => 4, 'type' => 'multiple'],
        'c177' => ['class' => Elements\C177::class, 'level' => 4, 'type' => 'single'],
        'c178' => ['class' => Elements\C178::class, 'level' => 4, 'type' => 'single'],
        'c179' => ['class' => Elements\C179::class, 'level' => 4, 'type' => 'single'],
        'c190' => ['class' => Elements\C190::class, 'level' => 3, 'type' => 'multiple'],
        'c191' => ['class' => Elements\C191::class, 'level' => 4, 'type' => 'single'],
        'c195' => ['class' => Elements\C195::class, 'level' => 3, 'type' => 'multiple'],
        'c197' => ['class' => Elements\C197::class, 'level' => 4, 'type' => 'multiple'],
        'c300' => ['class' => Elements\C300::class, 'level' => 2, 'type' => 'multiple'],
        'c310' => ['class' => Elements\C310::class, 'level' => 3, 'type' => 'multiple'],
        'c320' => ['class' => Elements\C320::class, 'level' => 3, 'type' => 'multiple'],
        'c321' => ['class' => Elements\C321::class, 'level' => 4, 'type' => 'multiple'],
        'c350' => ['class' => Elements\C350::class, 'level' => 2, 'type' => 'multiple'],
        'c370' => ['class' => Elements\C370::class, 'level' => 3, 'type' => 'multiple'],
        'c390' => ['class' => Elements\C390::class, 'level' => 3, 'type' => 'multiple'],
        'c400' => ['class' => Elements\C400::class, 'level' => 2, 'type' => 'multiple'],
        'c405' => ['class' => Elements\C405::class, 'level' => 3, 'type' => 'multiple'],
        'c410' => ['class' => Elements\C410::class, 'level' => 4, 'type' => 'single'],
        'c420' => ['class' => Elements\C420::class, 'level' => 4, 'type' => 'multiple'],
        'c425' => ['class' => Elements\C425::class, 'level' => 5, 'type' => 'multiple'],
        'c460' => ['class' => Elements\C460::class, 'level' => 4, 'type' => 'multiple'],
        'c465' => ['class' => Elements\C465::class, 'level' => 5, 'type' => 'single'],
        'c470' => ['class' => Elements\C470::class, 'level' => 5, 'type' => 'multiple'],
        'c490' => ['class' => Elements\C490::class, 'level' => 4, 'type' => 'multiple'],
        'c495' => ['class' => Elements\C495::class, 'level' => 2, 'type' => 'multiple'],
        'c500' => ['class' => Elements\C500::class, 'level' => 2, 'type' => 'multiple'],
        'c510' => ['class' => Elements\C510::class, 'level' => 3, 'type' => 'multiple'],
        'c590' => ['class' => Elements\C590::class, 'level' => 3, 'type' => 'multiple'],
        'c600' => ['class' => Elements\C600::class, 'level' => 2, 'type' => 'multiple'],
        'c601' => ['class' => Elements\C601::class, 'level' => 3, 'type' => 'multiple'],
        'c610' => ['class' => Elements\C610::class, 'level' => 3, 'type' => 'multiple'],
        'c690' => ['class' => Elements\C690::class, 'level' => 3, 'type' => 'multiple'],
        'c700' => ['class' => Elements\C700::class, 'level' => 2, 'type' => 'multiple'],
        'c790' => ['class' => Elements\C790::class, 'level' => 3, 'type' => 'multiple'],
        'c791' => ['class' => Elements\C791::class, 'level' => 4, 'type' => 'multiple'],
        'c800' => ['class' => Elements\C800::class, 'level' => 2, 'type' => 'multiple'],
        'c850' => ['class' => Elements\C850::class, 'level' => 3, 'type' => 'multiple'],
        'c860' => ['class' => Elements\C860::class, 'level' => 2, 'type' => 'multiple'],
        'c890' => ['class' => Elements\C890::class, 'level' => 3, 'type' => 'multiple']
    ];
    
    public function __construct()
    {
        parent::__construct(self::TOTAL);
    }
}
