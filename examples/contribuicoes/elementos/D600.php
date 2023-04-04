<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\D600;

$std = new stdClass();
$std->COD_MOD = '22';
$std->COD_MUN = '0911920';
$std->SER = 'WYBL';
$std->SUB = '219';
$std->IND_REC = '3';
$std->QTD_CONS = '9538';
$std->DT_DOC_INI = '03102018';
$std->DT_DOC_FIN = '03102018';
$std->VL_DOC = 31.26;
$std->VL_DESC = 48.70;
$std->VL_SERV = 82.7;
$std->VL_SERV_NT = 8.85;
$std->VL_TERC = 68.18;
$std->VL_DA = 50.89;
$std->VL_BC_ICMS = 61.96;
$std->VL_ICMS = 40.84;
$std->VL_PIS = 9.67;
$std->VL_COFINS = 1.66;

try {
$d600 = new D600($std);
echo "{$d600}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|D600|22|0911920|WYBL|219|3|9538|03102018|03102018|31,26|48,70|82,70|8,85|68,18|50,89|61,96|40,84|9,67|1,66|<br>';
