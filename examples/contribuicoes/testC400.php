<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\C400;

$std = new stdClass();
$std->COD_MOD = '2D';
$std->ECF_MOD = '934239879';
$std->ECF_FAB = 'AL42343232';
$std->ECF_CX = '72';
$std->CST_COFINS = '99';
$std->VL_ITEM = 79.87;
$std->VL_BC_COFINS = 99.17;
$std->ALIQ_COFINS = 834.1;
$std->QUANT_BC_COFINS = 720.4;
$std->ALIQ_COFINS_QUANT = 617.9;
$std->VL_COFINS = 445135.16;
$std->COD_ITEM = '98797869';
$std->COD_CTA = '6968653979';

try {
$c400 = new C400($std);
echo "{$c400}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|C400|2D|934239879|AL42343232|72|99|79,87|99,17|834,1000|720,400|617,9000|445135,16|98797869|6968653979|
<br>';
