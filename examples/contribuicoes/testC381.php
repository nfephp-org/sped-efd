<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\C381;

$std = new stdClass();
$std->CST_PIS = '21';
$std->COD_ITEM = '234346';
$std->VL_ITEM = 2.49;
$std->VL_BC_PIS = 61.19;
$std->ALIQ_PIS = 984.1;
$std->QUANT_BC_PIS = 266.4;
$std->ALIQ_PIS_QUANT = 215.3;
$std->VL_PIS = 28.71;
$std->COD_CTA = '98475629386742';

try {
$c381 = new C381($std);
echo "{$c381}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|C381|21|234346|2,49|61,19|984,1000|266,400|215,3000|28,71|98475629386742|<br>';
