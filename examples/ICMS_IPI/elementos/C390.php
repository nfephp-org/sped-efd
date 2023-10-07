<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C390;

$std = new stdClass();
$std->CST_ICMS = '662';
$std->CFOP = '5565';
$std->ALIQ_ICMS = 924.9;
$std->VL_OPR = 38.34;
$std->VL_BC_ICMS = 50.3;
$std->VL_ICMS = 89.78;
$std->VL_RED_BC = 12.13;
$std->COD_OBS = 'OL5EYC';

try {
    $c390 = new C390($std);
    echo "{$c390}".'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '|C390|662|5565|924,90|38,34|50,30|89,78|12,13|OL5EYC|<br>';
