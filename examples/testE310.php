<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\E310;

$std = new stdClass();
$std->IND_MOV_DIFAL = '0';
$std->VL_SLD_CRED_ANT_DIFAL = 100.00;
$std->VL_TOT_DEBITOS_DIFAL = 120.00;
$std->VL_OUT_DEB_DIFAL = 19.00;
$std->VL_TOT_DEB_FCP = 23.00;
$std->VL_TOT_CREDITOS_DIFAL = 509.00;
$std->VL_TOT_CRED_FCP = 145.00;
$std->VL_OUT_CRED_DIFAL = 80.00;
$std->VL_SLD_DEV_ANT_DIFAL = 45.60;
$std->VL_DEDUCOES_DIFAL = 14.50;
$std->VL_RECOL = 11.00;
$std->VL_SLD_CRED_TRANSPORTAR = 104.90;
$std->DEB_ESP_DIFAL = 105.00;

try {
    $b0 = new E310($std);
    echo "{$b0}".'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '|E310|0|100.00|120.00|19.00|23.00|509.00|145.00|80.00|45.60|14.50|11.00|104.90|105.00|<br>';