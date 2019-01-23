<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\Z1800;

$std = new stdClass();
$std->VL_CARGA = 100.00;
$std->VL_PASS = 80.00;
$std->VL_FAT = 40.00;
$std->IND_RAT = 10.000001;
$std->VL_ICMS_ANT = 12.00;
$std->VL_BC_ICMS = 45.90;
$std->VL_ICMS_APUR = 30.00;
$std->VL_BC_ICMS_APUR = 60.00;
$std->VL_DIF = 78.90;

try {
    $b1 = new Z1800($std);
    echo "{$b1}".'<br>';
    echo '|1800|100.00|80.00|40.00|10.000001|12.00|45.90|30.00|60.00|78.90|';
} catch (\Exception $e) {
    echo $e->getMessage();
}