<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\Z1510;

$std = new stdClass();
$std->NUM_ITEM = 123;
$std->COD_ITEM = '213097233650312654783';
$std->COD_CLASS = 1234;
$std->QTD = 111;
$std->UNID = '123456';
$std->VL_ITEM = 20.00;
$std->VL_DESC = 15.00;
$std->CST_ICMS = 135;
$std->CFOP = 7894;
$std->VL_BC_ICMS = 83270.28;
$std->ALIQ_ICMS = 123456;
$std->VL_ICMS = 90.30;
$std->VL_BC_ICMS_ST = 1239804.34;
$std->ALIQ_ST = 12.90;
$std->VL_ICMS_ST = 800.00;
$std->IND_REC = '0';
$std->COD_PART = '12093019750651235623';
$std->VL_PIS = 500.00;
$std->VL_COFINS = 132.35;
$std->COD_CTA = '934027';

try {
    $b1 = new Z1510($std);
    echo "{$b1}".'<br>';
    echo '|1510|123|213097233650312654783|1234|111|123456|20.00|15.00|135|7894|83270.28|123456|90.30|1239804.34|12.90|800.00|0|12093019750651235623|500.00|132.35|934027|';
} catch (\Exception $e) {
    echo $e->getMessage();
}