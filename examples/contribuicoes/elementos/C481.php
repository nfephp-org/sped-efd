<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\C481;

$std = new stdClass();
$std->CST_PIS = '04';
$std->VL_ITEM = 61.30;
$std->VL_BC_PIS = 25.62;
$std->ALIQ_PIS = 284.3;
$std->QUANT_BC_PIS = 385.2;
$std->ALIQ_PIS_QUANT = 389.1;
$std->VL_PIS = 99.16;
$std->COD_ITEM = '435747554673';
$std->COD_CTA = '93428658247368';

try {
$c481 = new C481($std);
echo "{$c481}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|C481|04|61,30|25,62|284,3000|385,200|389,1000|99,16|435747554673|93428658247368|<br>';
