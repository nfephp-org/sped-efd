<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\C491;

$std = new stdClass();
$std->COD_ITEM = '796586435467';
$std->CST_PIS = '49';
$std->CFOP = '9880';
$std->VL_ITEM = 45.75;
$std->VL_BC_PIS = 63.95;
$std->ALIQ_PIS = 793.8;
$std->QUANT_BC_PIS = 979.1;
$std->ALIQ_PIS_QUANT = 105.1;
$std->VL_PIS = 35.45;
$std->COD_CTA = '984765978237234659837683';

try {
$c491 = new C491($std);
echo "{$c491}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|C491|796586435467|49|9880|45,75|63,95|793,8000|979,100|105,1000|35,45|984765978237234659837683|<br>';
