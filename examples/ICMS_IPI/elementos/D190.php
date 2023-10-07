<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\D001;

$std = new stdClass();
$std->CST_ICMS = '000';
$std->CFOP = '1352';
$std->ALIQ_ICMS = 0.00;
$std->VL_OPR = 93.76;
$std->VL_BC_ICMS = 0.00;
$std->VL_ICMS = 0.00;
$std->VL_RED_BC = 0.00;
$std->COD_OBS = '';

try {
    $d0 = new D190($std);
    echo "{$d0}".'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '|D190|000|1352|0,00|93,76|0,00|0,00|0,00||<br>';
