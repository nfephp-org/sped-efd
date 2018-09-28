<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C600;

$std = new stdClass();
$std->COD_MOD = '4V';
$std->COD_MUN = 'SXFP4RH';
$std->SER = 'ERR5';
$std->SUB = '11';
$std->COD_CONS = 'S8';
$std->QTD_CONS = '4336';
$std->QTD_CANC = '3876';
$std->DT_DOC = '27092018';
$std->VL_DOC = 34.14;
$std->VL_DESC = 67.35;
$std->CONS = '4898';
$std->VL_FORN = 68.99;
$std->VL_SERV_NT = 14.75;
$std->VL_TERC = 2.85;
$std->VL_DA = 39.87;
$std->VL_BC_ICMS = 75.38;
$std->VL_ICMS = 16.31;
$std->VL_BC_ICMS_ST = 39.41;
$std->VL_ICMS_ST = 31.14;
$std->VL_PIS = 6.2;
$std->VL_COFINS = 44.40;

try {
$c600 = new C600($std);
echo "{$c600}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|C600|<br>';