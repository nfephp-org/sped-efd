<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C495;

$std = new stdClass();
$std->ALIQ_ICMS = 55.2;
$std->COD_ITEM = '2234343553256709';
$std->QTD = 318.6;
$std->QTD_CANC = 521.5;
$std->UNID = 'BMHVK2';
$std->VL_ITEM = 76.25;
$std->VL_DESC = 37.89;
$std->VL_CANC = 9.90;
$std->VL_ACMO = 26.16;
$std->VL_BC_ICMS = 95.9;
$std->VL_ICMS = 10.10;
$std->VL_ISEN = 6.60;
$std->VL_NT = 44.70;
$std->VL_ICMS_ST = 58.82;

try {
    $c495 = new C495($std);
    echo "{$c495}".'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '|C495|55,20|2234343553256709|318,600|521,500|BMHVK2|76,25|37,89|9,90|26,16|95,90|10,10|6,60|44,70|58,82|<br>';
