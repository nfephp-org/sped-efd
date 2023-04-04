<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C190;

$std = new stdClass();
$std->CST_ICMS = '527';
$std->CFOP = '334';
$std->ALIQ_ICMS = 519.5;
$std->VL_OPR = 93.50;
$std->VL_BC_ICMS = 82.76;
$std->VL_ICMS = 27.40;
$std->VL_BC_ICMS_ST = 55.8;
$std->VL_ICMS_ST = 4.24;
$std->VL_RED_BC = 63.27;
$std->VL_IPI = 52.81;
$std->COD_OBS = 'KV1PLO';

try {
    $c190 = new C190($std);
    echo "{$c190}".'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '|C190|527|334|519,50|93,50|82,76|27,40|55,80|4,24|63,27|52,81|KV1PLO|<br>';
