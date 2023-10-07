<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\M200;

$std = new stdClass();
$std->VL_TOT_CONT_NC_PER = 64.56;
$std->VL_TOT_CRED_DESC = 10.39;
$std->VL_TOT_CRED_DESC_ANT = 44.29;
$std->VL_TOT_CONT_NC_DEV = 55.8;
$std->VL_RET_NC = 47.66;
$std->VL_OUT_DED_NC = 1.13;
$std->VL_CONT_NC_REC = 50.96;
$std->VL_TOT_CONT_CUM_PER = 63.9;
$std->VL_RET_CUM = 46.8;
$std->VL_OUT_DED_CUM = 21.30;
$std->VL_CONT_CUM_REC = 34.61;
$std->VL_TOT_CONT_REC = 66.93;

try {
$m200 = new M200($std);
echo "{$m200}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|M200|64,56|10,39|44,29|55,80|47,66|1,13|50,96|63,90|46,80|21,30|34,61|66,93|<br>';
