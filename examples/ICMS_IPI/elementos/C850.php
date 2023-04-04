<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C850;

$std = new stdClass();
$std->CST_ICMS = '899';
$std->CFOP = '3318';
$std->ALIQ_ICMS = 583.3;
$std->VL_OPR = 63.21;
$std->VL_BC_ICMS = '24';
$std->VL_ICMS = 80.82;
$std->COD_OBS = 'P2WQ94';

try {
    $c850 = new C850($std);
    echo "{$c850}" . '<br>';
    echo '|C850|899|3318|583,30|63,21|24,00|80,82|P2WQ94|<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}
