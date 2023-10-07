<?php

namespace NFePHP\EFD\Blocks\Contribuicoes;

use NFePHP\EFD\Elements\Contribuicoes as Elements;
use NFePHP\EFD\Common\Block;

/**
 * Classe constutora do bloco M EFD Contribuições
 *
 * @method Elements\M001 m001(\stdClass $std) Constructor element M001
 * @method Elements\M100 m100(\stdClass $std) Constructor element M100
 * @method Elements\M105 m105(\stdClass $std) Constructor element M105
 * @method Elements\M110 m110(\stdClass $std) Constructor element M110
 * @method Elements\M115 m115(\stdClass $std) Constructor element M115
 * @method Elements\M200 m200(\stdClass $std) Constructor element M200
 * @method Elements\M205 m205(\stdClass $std) Constructor element M205
 * @method Elements\M210 m210(\stdClass $std) Constructor element M210
 * @method Elements\M211 m211(\stdClass $std) Constructor element M211
 * @method Elements\M215 m215(\stdClass $std) Constructor element M215
 * @method Elements\M220 m220(\stdClass $std) Constructor element M220
 * @method Elements\M225 m225(\stdClass $std) Constructor element M225
 * @method Elements\M230 m230(\stdClass $std) Constructor element M230
 * @method Elements\M300 m300(\stdClass $std) Constructor element M300
 * @method Elements\M350 m350(\stdClass $std) Constructor element M350
 * @method Elements\M400 m400(\stdClass $std) Constructor element M400
 * @method Elements\M410 m410(\stdClass $std) Constructor element M410
 * @method Elements\M500 m500(\stdClass $std) Constructor element M500
 * @method Elements\M505 m505(\stdClass $std) Constructor element M505
 * @method Elements\M510 m510(\stdClass $std) Constructor element M510
 * @method Elements\M515 m515(\stdClass $std) Constructor element M515
 * @method Elements\M600 m600(\stdClass $std) Constructor element M600
 * @method Elements\M605 m605(\stdClass $std) Constructor element M605
 * @method Elements\M610 m610(\stdClass $std) Constructor element M610
 * @method Elements\M615 m615(\stdClass $std) Constructor element M615
 * @method Elements\M620 m620(\stdClass $std) Constructor element M620
 * @method Elements\M625 m625(\stdClass $std) Constructor element M625
 * @method Elements\M630 m630(\stdClass $std) Constructor element M630
 * @method Elements\M700 m700(\stdClass $std) Constructor element M700
 * @method Elements\M800 m800(\stdClass $std) Constructor element M800
 * @method Elements\M810 m810(\stdClass $std) Constructor element M810
 */
final class BlockM extends Block
{
    const TOTAL = 'M990';

    public $elements = [
        'm001' => ['class' => Elements\M001::class, 'level' => 1, 'type' => 'single'],
        'm100' => ['class' => Elements\M100::class, 'level' => 2, 'type' => 'single'],
        'm105' => ['class' => Elements\M105::class, 'level' => 3, 'type' => 'single'],
        'm110' => ['class' => Elements\M110::class, 'level' => 3, 'type' => 'multiple'],
        'm115' => ['class' => Elements\M115::class, 'level' => 4, 'type' => 'multiple'],
        'm200' => ['class' => Elements\M200::class, 'level' => 2, 'type' => 'multiple'],
        'm205' => ['class' => Elements\M205::class, 'level' => 3, 'type' => 'multiple'],
        'm210' => ['class' => Elements\M210::class, 'level' => 3, 'type' => 'single'],
        'm211' => ['class' => Elements\M211::class, 'level' => 4, 'type' => 'multiple'],
        'm215' => ['class' => Elements\M215::class, 'level' => 4, 'type' => 'multiple'], //@todo
        'm220' => ['class' => Elements\M220::class, 'level' => 4, 'type' => 'multiple'],
        'm225' => ['class' => Elements\M225::class, 'level' => 5, 'type' => 'multiple'],
        'm230' => ['class' => Elements\M230::class, 'level' => 4, 'type' => 'multiple'],
        'm300' => ['class' => Elements\M300::class, 'level' => 2, 'type' => 'multiple'],
        'm350' => ['class' => Elements\M350::class, 'level' => 2, 'type' => 'single'],
        'm400' => ['class' => Elements\M400::class, 'level' => 2, 'type' => 'multiple'],
        'm410' => ['class' => Elements\M410::class, 'level' => 3, 'type' => 'multiple'],
        'm500' => ['class' => Elements\M500::class, 'level' => 2, 'type' => 'single'],
        'm505' => ['class' => Elements\M505::class, 'level' => 3, 'type' => 'single'],
        'm510' => ['class' => Elements\M510::class, 'level' => 3, 'type' => 'single'],
        'm515' => ['class' => Elements\M515::class, 'level' => 4, 'type' => 'single'],
        'm600' => ['class' => Elements\M600::class, 'level' => 2, 'type' => 'multiple'],
        'm605' => ['class' => Elements\M605::class, 'level' => 3, 'type' => 'multiple'],
        'm610' => ['class' => Elements\M610::class, 'level' => 3, 'type' => 'multiple'],
        'm611' => ['class' => Elements\M611::class, 'level' => 4, 'type' => 'single'],
        'm615' => ['class' => Elements\M615::class, 'level' => 4, 'type' => 'single'], //@todo
        'm620' => ['class' => Elements\M620::class, 'level' => 4, 'type' => 'multiple'],
        'm625' => ['class' => Elements\M625::class, 'level' => 5, 'type' => 'multiple'],
        'm630' => ['class' => Elements\M630::class, 'level' => 4, 'type' => 'multiple'],
        'm700' => ['class' => Elements\M700::class, 'level' => 2, 'type' => 'single'],
        'm800' => ['class' => Elements\M800::class, 'level' => 2, 'type' => 'multiple'],
        'm810' => ['class' => Elements\M810::class, 'level' => 3, 'type' => 'single'],
    ];

    public function __construct(string $layout = null)
    {
        $this->grupo = 'Contribuicoes';
        parent::__construct($layout);
        $this->elementTotal = 'M990';
    }
}
