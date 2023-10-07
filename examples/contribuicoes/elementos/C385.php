<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\C385;

$std = new stdClass();
$std->CST_COFINS = '49';
$std->COD_ITEM = '326346243';
$std->VL_ITEM = 74.27;
$std->VL_BC_COFINS = 99.17;
$std->ALIQ_COFINS = 834.1;
$std->QUANT_BC_COFINS = 720.4;
$std->ALIQ_COFINS_QUANT = 617.9;
$std->VL_COFINS = 445135.16;
$std->COD_CTA = '927456287562387469';

try {
$c385 = new C385($std);
echo "{$c385}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|C385|49|326346243|74,27|99,17|834,1000|720,400|617,9000|445135,16|927456287562387469|
<br>';
