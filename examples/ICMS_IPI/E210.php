<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\E210;

$std = new stdClass();
$std->IND_MOV_ST = '0';
$std->VL_SLD_CRED_ANT_ST = 200.00;
$std->VL_DEVOL_ST = 300.90;
$std->VL_RESSARC_ST = 8.00;
$std->VL_OUT_CRED_ST = 6.00;
$std->VL_AJ_CREDITOS_ST = 4.00;
$std->VL_RETENCAO_ST = 670.80;
$std->VL_OUT_DEB_ST = 23.00;
$std->VL_AJ_DEBITOS_ST = 90.00;
$std->VL_SLD_DEV_ANT_ST = 1143.10;
$std->VL_DEDUCOES_ST = 170.00;
$std->VL_ICMS_RECOL_ST = 973.10;
$std->VL_SLD_CRED_ST_TRANSPORTAR = 0.00;
$std->DEB_ESP_ST = 45.60;

try {
    $b0 = new E210($std);
    echo "{$b0}".'<br>';
    echo '|E210|0|200.00|300.90|8.00|6.00|4.00|670.80|23.00|90.00|1143.10|170.00|973.10|0.00|45.60|<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}
