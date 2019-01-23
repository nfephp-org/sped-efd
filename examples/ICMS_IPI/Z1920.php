<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\Z1920;

$std = new stdClass();
$std->VL_TOT_TRANSF_DEBITOS_OA = 100.00;
$std->VL_TOT_AJ_DEBITOS_OA = 150.00;
$std->VL_ESTORNOS_CRED_OA = 80.00;
$std->VL_TOT_TRANSF_CREDITOS_OA = 12.00;
$std->VL_TOT_AJ_CREDITOS_OA = 180.00;
$std->VL_ESTORNOS_DEB_OA = 45.00;
$std->VL_SLD_CREDOR_ANT_OA = 23.50;
$std->VL_SLD_APURADO_OA = 69.50;
$std->VL_TOT_DED = 460.00;
$std->VL_ICMS_RECOLHER_OA = 45.00;
$std->VL_SLD_CREDOR_TRANSP_OA = 0.00;
$std->DEB_ESP_OA = 140.00;

try {
    $b1 = new Z1920($std);
    echo "{$b1}".'<br>';
    echo '|1920|100.00|150.00|80.00|12.00|180.00|45.00|23.50|69.50|460.00|45.00|0.00|140.00|';
} catch (\Exception $e) {
    echo $e->getMessage();
}