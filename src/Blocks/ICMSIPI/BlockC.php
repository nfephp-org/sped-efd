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
 *
 * @method Elements\C001 c001(\stdClass $std) Constructor element C001
 * @method Elements\C100 c100(\stdClass $std) Constructor element C100
 * @method Elements\C101 c101(\stdClass $std) Constructor element C101
 * @method Elements\C105 c105(\stdClass $std) Constructor element C105
 * @method Elements\C110 c110(\stdClass $std) Constructor element C110
 * @method Elements\C111 c111(\stdClass $std) Constructor element C111
 * @method Elements\C112 c112(\stdClass $std) Constructor element C112
 * @method Elements\C113 c113(\stdClass $std) Constructor element C113
 * @method Elements\C114 c114(\stdClass $std) Constructor element C114
 * @method Elements\C115 c115(\stdClass $std) Constructor element C115
 * @method Elements\C116 c116(\stdClass $std) Constructor element C116
 * @method Elements\C120 c120(\stdClass $std) Constructor element C120
 * @method Elements\C130 c130(\stdClass $std) Constructor element C130
 * @method Elements\C140 c140(\stdClass $std) Constructor element C140
 * @method Elements\C141 c141(\stdClass $std) Constructor element C141
 * @method Elements\C160 c160(\stdClass $std) Constructor element C160
 * @method Elements\C165 c165(\stdClass $std) Constructor element C165
 * @method Elements\C170 c170(\stdClass $std) Constructor element C170
 * @method Elements\C171 c171(\stdClass $std) Constructor element C171
 * @method Elements\C172 c172(\stdClass $std) Constructor element C172
 * @method Elements\C173 c173(\stdClass $std) Constructor element C173
 * @method Elements\C174 c174(\stdClass $std) Constructor element C174
 * @method Elements\C175 c175(\stdClass $std) Constructor element C175
 * @method Elements\C176 c176(\stdClass $std) Constructor element C176
 * @method Elements\C177 c177(\stdClass $std) Constructor element C177
 * @method Elements\C178 c178(\stdClass $std) Constructor element C178
 * @method Elements\C179 c179(\stdClass $std) Constructor element C179
 * @method Elements\C180 c180(\stdClass $std) Constructor element C180
 * @method Elements\C185 c185(\stdClass $std) Constructor element C185
 * @method Elements\C190 c190(\stdClass $std) Constructor element C190
 * @method Elements\C191 c191(\stdClass $std) Constructor element C191
 * @method Elements\C195 c195(\stdClass $std) Constructor element C195
 * @method Elements\C197 c197(\stdClass $std) Constructor element C197
 * @method Elements\C300 c300(\stdClass $std) Constructor element C300
 * @method Elements\C310 c310(\stdClass $std) Constructor element C310
 * @method Elements\C320 c320(\stdClass $std) Constructor element C320
 * @method Elements\C321 c321(\stdClass $std) Constructor element C321
 * @method Elements\C330 c330(\stdClass $std) Constructor element C330
 * @method Elements\C350 c350(\stdClass $std) Constructor element C350
 * @method Elements\C370 c370(\stdClass $std) Constructor element C370
 * @method Elements\C380 c380(\stdClass $std) Constructor element C380
 * @method Elements\C390 c390(\stdClass $std) Constructor element C390
 * @method Elements\C400 c400(\stdClass $std) Constructor element C400
 * @method Elements\C405 c405(\stdClass $std) Constructor element C405
 * @method Elements\C410 c410(\stdClass $std) Constructor element C410
 * @method Elements\C420 c420(\stdClass $std) Constructor element C420
 * @method Elements\C425 c425(\stdClass $std) Constructor element C425
 * @method Elements\C430 c430(\stdClass $std) Constructor element C430
 * @method Elements\C460 c460(\stdClass $std) Constructor element C460
 * @method Elements\C465 c465(\stdClass $std) Constructor element C465
 * @method Elements\C470 c470(\stdClass $std) Constructor element C470
 * @method Elements\C480 c480(\stdClass $std) Constructor element C480
 * @method Elements\C490 c490(\stdClass $std) Constructor element C490
 * @method Elements\C495 c495(\stdClass $std) Constructor element C495
 * @method Elements\C500 c500(\stdClass $std) Constructor element C500
 * @method Elements\C510 c510(\stdClass $std) Constructor element C510
 * @method Elements\C590 c590(\stdClass $std) Constructor element C590
 * @method Elements\C591 c591(\stdClass $std) Constructor element C591
 * @method Elements\C595 c595(\stdClass $std) Constructor element C595
 * @method Elements\C597 c597(\stdClass $std) Constructor element C597
 * @method Elements\C600 c600(\stdClass $std) Constructor element C600
 * @method Elements\C601 c601(\stdClass $std) Constructor element C601
 * @method Elements\C610 c610(\stdClass $std) Constructor element C610
 * @method Elements\C690 c690(\stdClass $std) Constructor element C690
 * @method Elements\C700 c700(\stdClass $std) Constructor element C700
 * @method Elements\C790 c790(\stdClass $std) Constructor element C790
 * @method Elements\C791 c791(\stdClass $std) Constructor element C791
 * @method Elements\C800 c800(\stdClass $std) Constructor element C800
 * @method Elements\C810 c810(\stdClass $std) Constructor element C810
 * @method Elements\C815 c815(\stdClass $std) Constructor element C815
 * @method Elements\C850 c850(\stdClass $std) Constructor element C850
 * @method Elements\C860 c860(\stdClass $std) Constructor element C860
 * @method Elements\C870 c870(\stdClass $std) Constructor element C870
 * @method Elements\C880 c880(\stdClass $std) Constructor element C880
 * @method Elements\C890 c890(\stdClass $std) Constructor element C890
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
        'c180' => ['class' => Elements\C180::class, 'level' => 3, 'type' => 'single'],
        'c185' => ['class' => Elements\C185::class, 'level' => 3, 'type' => 'multiple'],
        'c190' => ['class' => Elements\C190::class, 'level' => 3, 'type' => 'multiple'],
        'c191' => ['class' => Elements\C191::class, 'level' => 4, 'type' => 'single'],
        'c195' => ['class' => Elements\C195::class, 'level' => 3, 'type' => 'multiple'],
        'c197' => ['class' => Elements\C197::class, 'level' => 4, 'type' => 'multiple'],
        'c300' => ['class' => Elements\C300::class, 'level' => 2, 'type' => 'multiple'],
        'c310' => ['class' => Elements\C310::class, 'level' => 3, 'type' => 'multiple'],
        'c320' => ['class' => Elements\C320::class, 'level' => 3, 'type' => 'multiple'],
        'c321' => ['class' => Elements\C321::class, 'level' => 4, 'type' => 'multiple'],
        'c330' => ['class' => Elements\C330::class, 'level' => 5, 'type' => 'single'],
        'c350' => ['class' => Elements\C350::class, 'level' => 2, 'type' => 'multiple'],
        'c370' => ['class' => Elements\C370::class, 'level' => 3, 'type' => 'multiple'],
        'c380' => ['class' => Elements\C380::class, 'level' => 4, 'type' => 'multiple'],
        'c390' => ['class' => Elements\C390::class, 'level' => 3, 'type' => 'multiple'],
        'c400' => ['class' => Elements\C400::class, 'level' => 2, 'type' => 'multiple'],
        'c405' => ['class' => Elements\C405::class, 'level' => 3, 'type' => 'multiple'],
        'c410' => ['class' => Elements\C410::class, 'level' => 4, 'type' => 'single'],
        'c420' => ['class' => Elements\C420::class, 'level' => 4, 'type' => 'multiple'],
        'c430' => ['class' => Elements\C430::class, 'level' => 6, 'type' => 'multiple'],
        'c425' => ['class' => Elements\C425::class, 'level' => 5, 'type' => 'multiple'],
        'c460' => ['class' => Elements\C460::class, 'level' => 4, 'type' => 'multiple'],
        'c465' => ['class' => Elements\C465::class, 'level' => 5, 'type' => 'single'],
        'c470' => ['class' => Elements\C470::class, 'level' => 5, 'type' => 'multiple'],
        'c480' => ['class' => Elements\C480::class, 'level' => 6, 'type' => 'multiple'],
        'c490' => ['class' => Elements\C490::class, 'level' => 4, 'type' => 'multiple'],
        'c495' => ['class' => Elements\C495::class, 'level' => 2, 'type' => 'multiple'],
        'c500' => ['class' => Elements\C500::class, 'level' => 2, 'type' => 'multiple'],
        'c510' => ['class' => Elements\C510::class, 'level' => 3, 'type' => 'multiple'],
        'c590' => ['class' => Elements\C590::class, 'level' => 3, 'type' => 'multiple'],
        'c591' => ['class' => Elements\C591::class, 'level' => 3, 'type' => 'multiple'],
        'c600' => ['class' => Elements\C600::class, 'level' => 2, 'type' => 'multiple'],
        'c601' => ['class' => Elements\C601::class, 'level' => 3, 'type' => 'multiple'],
        'c610' => ['class' => Elements\C610::class, 'level' => 3, 'type' => 'multiple'],
        'c690' => ['class' => Elements\C690::class, 'level' => 3, 'type' => 'multiple'],
        'c700' => ['class' => Elements\C700::class, 'level' => 2, 'type' => 'multiple'],
        'c790' => ['class' => Elements\C790::class, 'level' => 3, 'type' => 'multiple'],
        'c791' => ['class' => Elements\C791::class, 'level' => 4, 'type' => 'multiple'],
        'c800' => ['class' => Elements\C800::class, 'level' => 2, 'type' => 'multiple'],
        'c810' => ['class' => Elements\C810::class, 'level' => 3, 'type' => 'multiple'],
        'c815' => ['class' => Elements\C815::class, 'level' => 4, 'type' => 'single'],
        'c850' => ['class' => Elements\C850::class, 'level' => 3, 'type' => 'multiple'],
        'c860' => ['class' => Elements\C860::class, 'level' => 2, 'type' => 'multiple'],
        'c870' => ['class' => Elements\C870::class, 'level' => 3, 'type' => 'multiple'],
        'c880' => ['class' => Elements\C880::class, 'level' => 4, 'type' => 'single'],
        'c890' => ['class' => Elements\C890::class, 'level' => 3, 'type' => 'multiple']
    ];
}
