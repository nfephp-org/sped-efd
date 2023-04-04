<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\B500;

$std = new stdClass();
$std->VL_REC = 500.00;
$std->QTD_PROF = 17;
$std->VL_OR = 456.80;

try {
    $b0 = new B500($std);
    echo "{$b0}".'<br>';
    echo '|B500|500.00|17|456.80|<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

