<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\Z1102;

$std = new stdClass();
$std->VL_CRED_PIS_TRIB_MI = 0.28;
$std->VL_CRED_PIS_NT_MI = 40.77;
$std->VL_CRED_PIS_EXP = 46.61;

try {
$z1102 = new Z1102($std);
echo "{$z1102}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|1102|0,28|40,77|46,61|<br>';
