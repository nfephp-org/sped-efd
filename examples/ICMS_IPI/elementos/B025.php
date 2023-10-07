<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\B025;

$std = new stdClass();
$std->VL_CONT_P = 100.00;
$std->VL_BC_ISS_P = 150.89;
$std->ALIQ_ISS = 3;
$std->VL_ISS_P = 4.53;
$std->VL_ISNT_ISS_P = 30.00;
$std->COD_SERV = '0001';

try {
    $b0 = new B025($std);
    echo "{$b0}".'<br>';
    echo '|B025|100.00|150.89|3|4.53|30.00|0001|<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}
