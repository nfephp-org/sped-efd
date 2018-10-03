<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\C820;

$std = new stdClass();
$std->CFOP = '5015';
$std->VL_ITEM = 20.96;
$std->COD_ITEM = '0980605280936551';
$std->CST_PIS = '99';
$std->QUANT_BC_PIS = 948.7;
$std->ALIQ_PIS_QUANT = 363.5;
$std->VL_PIS = 86.70;
$std->CST_COFINS = '99';
$std->QUANT_BC_COFINS = 895.2;
$std->ALIQ_COFINS_QUANT = 438.4;
$std->VL_COFINS = 43.56;
$std->COD_CTA = '1941359911639727';

try {
$c820 = new C820($std);
echo "{$c820}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|C820|5015|20,96|0980605280936551|99|948,700|363,5000|86,70|99|895,200|438,4000|43,56|1941359911639727|<br>';
