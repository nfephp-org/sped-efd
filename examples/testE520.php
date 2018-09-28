<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\E520;

$std = new stdClass();
$std->VL_SD_ANT_IPI = 12.90;
$std->VL_DEB_IPI = 40.00;
$std->VL_CRED_IPI = 89.70;
$std->VL_OD_IPI = 10.00;
$std->VL_OC_IPI = 10.00;
$std->VL_SC_IPI = 12.00;
$std->VL_SD_IPI = 45.80;

try {
    $b0 = new E520($std);
    echo "{$b0}".'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '|E520|12.90|40.00|89.70|10.00|10.00|12.00|45.80|<br>';