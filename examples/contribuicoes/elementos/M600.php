<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\M600;

$std = new stdClass();
$std->VL_TOT_CONT_NC_PER = 80.31;
$std->VL_TOT_CRED_DESC = 30.68;
$std->VL_TOT_CRED_DESC_ANT = 32.64;
$std->VL_TOT_CONT_NC_DEV = 69.36;
$std->VL_RET_NC = 3.36;
$std->VL_OUT_DED_NC = 76.27;
$std->VL_CONT_NC_REC = 40.19;
$std->VL_TOT_CONT_CUM_PER = 96.2;
$std->VL_RET_CUM = 67.4;
$std->VL_OUT_DED_CUM = 94.23;
$std->VL_CONT_CUM_REC = 30.39;
$std->VL_TOT_CONT_REC = 59.16;

try {
$m600 = new M600($std);
echo "{$m600}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|M600|80,31|30,68|32,64|69,36|3,36|76,27|40,19|96,20|67,40|94,23|30,39|59,16|
<br>';
