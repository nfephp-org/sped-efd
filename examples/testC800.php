<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C800;

$std = new stdClass();
$std->COD_MOD = '59';
$std->COD_SIT = '02';
$std->NUM_CFE = '514438';
$std->DT_DOC = '27092018';
$std->VL_CFE = 34.19;
$std->VL_PIS = 99.14;
$std->VL_COFINS = 29.42;
$std->CNPJ_CPF = '40814340000170';
$std->NR_SAT = '818122604';
$std->CHV_CFE = '43171207364617000135550000000120141000120146';
$std->VL_DESC = 1.93;
$std->VL_MERC = 92.98;
$std->VL_OUT_DA = 64.92;
$std->VL_ICMS = 47.41;
$std->VL_PIS_ST = 1.27;
$std->VL_COFINS_ST = 70.77;

try {
$c800 = new C800($std);
echo "{$c800}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|C800|59|02|514438|27092018|34,19|99,14|29,42|40814340000170|818122604|43171207364617000135550000000120141000120146|1,93|92,98|64,92|47,41|1,27|70,77|<br>';
