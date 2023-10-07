<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C130;

$std = new stdClass();
$std->VL_SERV_NT = 25.34;
$std->VL_BC_ISSQN = 1.34;
$std->VL_ISSQN = 2.43;
$std->VL_BC_IRRF = 1.12;
$std->VL_IRRF = 1.23;
$std->VL_BC_PREV = 2.1;
$std->VL_PREV = 0.23;
try {
    $c130 = new C130($std);
    echo "{$c130}".'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '|C130|25,34|1,34|2,43|1,12||2,10|0,23|<br>';
