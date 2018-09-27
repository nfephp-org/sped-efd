<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\E210;

$std = new stdClass();
$std->IND_MOV_ST = '0';
$std->VL_SLD_CRED_ANT_ST = 200.00;
$std->VL_DEVOL_ST = 300.90;
$std->VL_RESSARC_ST = 180.00;
$std->VL_OUT_CRED_ST = 600.00;
$std->VL_AJ_CREDITOS_ST = 40.00;
$std->VL_RETENCAO_ST = 234.80;
$std->VL_OUT_DEB_ST = 23.00;
$std->VL_AJ_DEBITOS_ST = 90.00;
$std->VL_SLD_DEV_ANT_ST = 350.00;
$std->VL_DEDUCOES_ST = 170.00;
$std->VL_ICMS_RECOL_ST = 140.00;
$std->VL_SLD_CRED_ST_TRANSPORTAR = 50.00;
$std->DEB_ESP_ST = 45.60;

try {
    $b0 = new E210($std);
    echo "{$b0}".'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '|E210|0|200.00|300.90|180.00|600.00|40.00|234.80|23.00|90.00|350.00|170.00|140.00|50.00|45.60|<br>';