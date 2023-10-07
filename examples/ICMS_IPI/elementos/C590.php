<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C590;

$std = new stdClass();
$std->CST_ICMS = '000';
$std->CFOP = '1252';
$std->ALIQ_ICMS = 18.0;
$std->VL_OPR = 78280.54;
$std->VL_BC_ICMS = 76714.93;
$std->VL_ICMS = 3808.69;
$std->VL_BC_ICMS_ST = 0.00;
$std->VL_ICMS_ST = 0.00;
$std->VL_RED_BC = 0.00;
$std->COD_OBS = '';

try {
    $c590 = new C590($std);
    echo "{$c590}".'<br>';
    echo '|C590|000|1252|18,00|78280,54|76714,93|3808,69|0,00|0,00||<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

