<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C320;

$std = new stdClass();
$std->CST_ICMS = '148';
$std->CFOP = '1913';
$std->ALIQ_ICMS = 245.9;
$std->VL_BC_ICMS = 36.37;
$std->VL_ICMS = 17.35;
$std->VL_RED_BC = 71.77;
$std->COD_OBS = '9WSR4K';

try {
    $c320 = new C320($std);
    echo "{$c320}".'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '|C320|148|1913|245,90|36,37|17,35|71,77|9WSR4K|<br>';
