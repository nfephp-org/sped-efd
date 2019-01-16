<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\E510;

$std = new stdClass();
$std->CFOP = 7391;
$std->CST_IPI = '02';
$std->VL_CONT_IPI = 100.00;
$std->VL_BC_IPI = 129.90;
$std->VL_IPI = 15.50;

try {
    $b0 = new E510($std);
    echo "{$b0}".'<br>';
    echo '|E510|7391|02|100.00|129.90|15.50|<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}
