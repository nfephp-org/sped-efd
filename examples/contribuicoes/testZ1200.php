<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\Z1200;

$std = new stdClass();
$std->PER_APUR_ANT = '532384';
$std->NAT_CONT_REC = '4R';
$std->VL_CONT_APUR = 85.4;
$std->VL_CRED_PIS_DESC = 27.22;
$std->VL_CONT_DEV = 44.73;
$std->VL_OUT_DED = 64.60;
$std->VL_CONT_EXT = 67.80;
$std->VL_MUL = 44.92;
$std->VL_JUR = 2.96;
$std->DT_RECOL = '04102018';

try {
$z1200 = new Z1200($std);
echo "{$z1200}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|1200|532384|4R|85,40|27,22|44,73|64,60|67,80|44,92|2,96|04102018|<br>';
