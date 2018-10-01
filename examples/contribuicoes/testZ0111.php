<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\Z0111;

$std = new stdClass();
$std->REC_BRU_NCUM_TRIB_MI = 896.2;
$std->REC_BRU_NCUM_NT_MI = 904.8;
$std->REC_BRU_NCUM_EXP = 818.9;
$std->REC_BRU_CUM = 14.2;
$std->REC_BRU_TOTAL = 545.6;

try {
$z0111 = new Z0111($std);
echo "{$z0111}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|Z0111|<br>';