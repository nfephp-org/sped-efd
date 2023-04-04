<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C470;

$std = new stdClass();
$std->COD_ITEM = '2234343553256709';
$std->QTD = 141.8;
$std->QTD_CANC = 453.4;
$std->UNID = 'WM8P5C';
$std->VL_ITEM = 66.45;
$std->CST_ICMS = '292';
$std->CFOP = '6763';
$std->ALIQ_ICMS = 763.3;
$std->VL_PIS = 13.10;
$std->VL_COFINS = 9.83;

try {
    $c470 = new C470($std);
    echo "{$c470}".'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '|C470|2234343553256709|141,800|453,400|WM8P5C|66,45|292|6763|763,30|13,10|9,83|<br>';
