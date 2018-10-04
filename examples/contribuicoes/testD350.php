<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\D350;

$std = new stdClass();
$std->COD_MOD = '2E';
$std->ECF_MOD = '6MKGEYA4KI9PJ288ENVD';
$std->ECF_FAB = 'DP8BG3O8M0GYTEVK3A9NV';
$std->DT_DOC = '03102018';
$std->CRO = '823';
$std->CRZ = '940338';
$std->NUM_COO_FIN = '37163';
$std->GT_FIN = 779.4;
$std->VL_BRT = 59.77;
$std->CST_PIS = '99';
$std->VL_BC_PIS = 99.74;
$std->ALIQ_PIS = 967.6;
$std->QUANT_BC_PIS = 458.3;
$std->ALIQ_PIS_QUANT = 120.3;
$std->VL_PIS = 965.08424;
$std->CST_COFINS = '99';
$std->VL_BC_COFINS = 81.84;
$std->ALIQ_COFINS = 481.2;
$std->QUANT_BC_COFINS = 588.4;
$std->ALIQ_COFINS_QUANT = 817.9;
$std->VL_COFINS = 393.81408;
$std->COD_CTA = '8762171243933904';

try {
$d350 = new D350($std);
echo "{$d350}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|D350|2E|6MKGEYA4KI9PJ288ENVD|DP8BG3O8M0GYTEVK3A9NV|03102018|823|940338|37163|779,40|59,77|99|99,74|967,6000|458,300|120,3000|965,08|99|81,84|481,2000|588,400|817,9000|393,81|8762171243933904|<br>';
