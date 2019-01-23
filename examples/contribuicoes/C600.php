<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\C600;

$std = new stdClass();
$std->COD_MOD = '06';
$std->COD_MUN = '9347584';
$std->SER = 'RYAT';
$std->SUB = '831';
$std->COD_CONS = '22';
$std->QTD_CONS = '3534';
$std->QTD_CANC = '2877';
$std->DT_DOC = '02102018';
$std->VL_DOC = 33.78;
$std->VL_DESC = 34.15;
$std->CONS = '5247';
$std->VL_FORN = 71.72;
$std->VL_SERV_NT = 2.99;
$std->VL_TERC = 81.67;
$std->VL_DA = 88.84;
$std->VL_BC_ICMS = 37.62;
$std->VL_ICMS = 65.23;
$std->VL_BC_ICMS_ST = 33.36;
$std->VL_ICMS_ST = 53.38;
$std->VL_PIS = 38.84;
$std->VL_COFINS = 61.23;

try {
$c600 = new C600($std);
echo "{$c600}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|C600|06|9347584|RYAT|831|22|3534|2877|02102018|33,78|34,15|5247|71,72|2,99|81,67|88,84|37,62|65,23|33,36|53,38|38,84|61,23|<br>';
