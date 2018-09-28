<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C590;

$std = new stdClass();
$std->CST_ICMS = '997';
$std->CFOP = '3140';
$std->ALIQ_ICMS = 907.4;
$std->VL_OPR = 21.30;
$std->VL_BC_ICMS = 98.56;
$std->VL_ICMS = 7.55;
$std->VL_BC_ICMS_ST = 74.39;
$std->VL_RED_BC = 20.11;
$std->COD_OBS = 'NV0FCF';

try {
$c590 = new C590($std);
echo "{$c590}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|C590|<br>';