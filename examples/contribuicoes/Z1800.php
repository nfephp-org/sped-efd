<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\Z1800;

$std = new stdClass();
$std->INC_IMOB = '6K1NJNDE8';
$std->REC_RECEB_RET = 563.1;
$std->REC_FIN_RET = 678.7;
$std->BC_RET = 612.4;
$std->ALIQ_RET = 132.3;
$std->VL_REC_UNI = 24.34;
$std->DT_REC_UNI = '04102018';
$std->COD_REC = '1951';

try {
$z1800 = new Z1800($std);
echo "{$z1800}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|1800|6K1NJNDE8|563,10|678,70|612,40|132,30|24,34|04102018|1951|<br>';
