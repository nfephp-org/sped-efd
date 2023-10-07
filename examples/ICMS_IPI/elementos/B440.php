<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\B440;

$std = new stdClass();
$std->IND_OPER = 1;
$std->COD_PART = '13246';
$std->VL_CONT_RT = 200.00;
$std->VL_BC_ISS_RT = 29.00;
$std->VL_ISS_RT = 58.70;

try {
    $b0 = new B440($std);
    echo "{$b0}".'<br>';
    echo '|B440|1|13246|200.00|29.00|58.70|<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}
