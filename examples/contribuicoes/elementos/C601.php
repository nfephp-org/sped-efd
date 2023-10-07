<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\C601;

$std = new stdClass();
$std->CST_PIS = '99';
$std->VL_ITEM = 76.9;
$std->VL_BC_PIS = 4.37;
$std->ALIQ_PIS = 505.8;
$std->VL_PIS = 22.10346;
$std->COD_CTA = '934859348756';

try {
$c601 = new C601($std);
echo "{$c601}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|C601|99|76,90|4,37|505,8000|64,78|934859348756|<br>';
