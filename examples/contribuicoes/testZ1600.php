<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\Z1600;

$std = new stdClass();
$std->PER_APUR_ANT = '739670';
$std->NAT_CONT_REC = 'KS';
$std->VL_CONT_APUR = 63.75;
$std->VL_CRED_COFINS_DESC = 6.99;
$std->VL_CONT_DEV = 76.57;
$std->VL_OUT_DED = 29.45;
$std->VL_CONT_EXT = 7.94;
$std->VL_MUL = 76.19;
$std->VL_JUR = 65.59;
$std->DT_RECOL = '04102018';

try {
$z1600 = new Z1600($std);
echo "{$z1600}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|1600|739670|KS|63,75|6,99|76,57|29,45|7,94|76,19|65,59|04102018|<br>';
