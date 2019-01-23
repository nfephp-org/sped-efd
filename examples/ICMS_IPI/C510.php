<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C510;

$std = new stdClass();
$std->NUM_ITEM = '364';
$std->COD_ITEM = '9437987065';
$std->COD_CLASS = '2233';
$std->QTD = 245.5;
$std->UNID = 'IC3RYA';
$std->VL_ITEM = 18.99;
$std->VL_DESC = 93.50;
$std->CST_ICMS = '226';
$std->CFOP = '6680';
$std->VL_BC_ICMS = 63.25;
$std->ALIQ_ICMS = 258.4;
$std->VL_ICMS = 33.60;
$std->ALIQ_ST = 762.7;
$std->VL_ICMS_ST = 90.39;
$std->IND_REC = '0';
$std->COD_PART = '23423987';
$std->VL_PIS = 99.85;
$std->VL_COFINS = 85.74;

try {
$c510 = new C510($std);
echo "{$c510}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|C510|364|9437987065|2233|245,500|IC3RYA|18,99|93,50|226|6680|63,25|258,40|33,60|762,70|90,39|0|23423987|99,85|85,74|<br>';
