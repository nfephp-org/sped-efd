<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\B470;

$std = new stdClass();
$std->VL_CONT = 1230.00;
$std->VL_MAT_TERC = 200.00;
$std->VL_MAT_PROP = 149.90;
$std->VL_SUB = 110.00;
$std->VL_ISNT = 98.47;
$std->VL_DED_BC = 558.37;
$std->VL_BC_ISS = 45.80;
$std->VL_BC_ISS_RT = 69.80;
$std->VL_ISS = 12.90;
$std->VL_ISS_RT = 45.00;
$std->VL_DED = 70.00;
$std->VL_ISS_REC = 40.00;
$std->VL_ISS_ST = 34.50;
$std->VL_ISS_REC_UNI = 56.78;

try {
    $b0 = new B470($std);
    echo "{$b0}".'<br>';
    echo '|B470|1230.00|200.00|149.90|110.00|98.47|558.37|45.80|69.80|12.90|45.00|70.00|40.00|34.50|56.78|<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}