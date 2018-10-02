<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\E310;

$std = new stdClass();
$std->IND_MOV_FCP_DIFAL = '0';
$std->VL_SLD_CRED_ANT_DIFAL = 100.00;
$std->VL_TOT_DEBITOS_DIFAL = 120.00;
$std->VL_OUT_DEB_DIFAL = 19.00;
$std->VL_TOT_CREDITOS_DIFAL = 509.00;
$std->VL_OUT_CRED_DIFAL = 80.00;
$std->VL_SLD_DEV_ANT_DIFAL = 45.60;
$std->VL_DEDUCOES_DIFAL = 14.50;
$std->VL_RECOL_DIFAL = 70.20;
$std->VL_SLD_CRED_TRANSPORTAR_DIFAL = 104.90;
$std->DEB_ESP_DIFAL = 105.00;
$std->VL_SLD_CRED_ANT_FCP = 11.00;
$std->VL_TOT_DEB_FCP = 16.00;
$std->VL_OUT_DEB_FCP = 190.00;
$std->VL_TOT_CRED_FCP = 45.00;
$std->VL_OUT_CRED_FCP = 1.00;
$std->VL_SLD_DEV_ANT_FCP = 89.90;
$std->VL_DEDUCOES_FCP = 24.00;
$std->VL_RECOL_FCP = 14.40;
$std->VL_SLD_CRED_TRANSPORTAR_FCP = 19.00;
$std->DEB_ESP_FCP = 23.90;

try {
    $b0 = new E310($std);
    echo "{$b0}".'<br>';
    echo '|E310|0|100.00|120.00|19.00|509.00|80.00|45.60|14.50|70.20|104.90|105.00|11.00|16.00|190.00|45.00|1.00|89.90|24.00|14.40|19.00|23.90|<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}
