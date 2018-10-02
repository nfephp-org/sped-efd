<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\B035;

$std = new stdClass();
$std->VL_CONT_P = 500.00;
$std->VL_BC_ISS_P = 230.00;
$std->ALIQ_ISS = 4;
$std->VL_ISS_P = 9.20;
$std->VL_ISNT_ISS_P = 180.00;
$std->COD_SERV = '0974';

try {
    $b0 = new B035($std);
    echo "{$b0}".'<br>';
    echo '|B035|500.00|230.00|4|9.20|180.00|0974|<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}
