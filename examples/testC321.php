<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C321;

$std = new stdClass();
$std->COD_ITEM = 'CR3321';
$std->QTD = 347.1;
$std->UNID = '8T3JWI';
$std->VL_ITEM = 86.18;
$std->VL_DESC = 82.74;
$std->VL_BC_ICMS = 87.29;
$std->VL_ICMS = 10.58;
$std->VL_PIS = 54.76;
$std->VL_COFINS = 1.62;

try {
    $c321 = new C321($std);
    echo "{$c321}".'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '|C321|CR3321|347,100|8T3JWI|86,18|82,74|87,29|10,58|54,76|1,62|<br>';
