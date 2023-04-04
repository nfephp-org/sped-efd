<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\C800;

$std = new stdClass();
$std->COD_MOD = '00';
$std->COD_SIT = '23';
$std->NUM_CFE = '524279280';
$std->DT_DOC = '02102018';
$std->VL_CFE = 25.36;
$std->VL_PIS = 49.36;
$std->VL_COFINS = 21.87;
$std->CNPJ_CPF = '40814340000170';
$std->NR_SAT = '418897811';
$std->CHV_CFE = '43171207364617000135550000000120141000120146';
$std->VL_DESC = 94.26;
$std->VL_MERC = 30.37;
$std->VL_OUT_DA = 53.82;
$std->VL_ICMS = 60.81;
$std->VL_PIS_ST = 78.51;
$std->VL_COFINS_ST = 43.57;

try {
$c800 = new C800($std);
echo "{$c800}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|C800|00|23|524279280|02102018|25,36|49,36|21,87|40814340000170|418897811|43171207364617000135550000000120141000120146|94,26|30,37|53,82|60,81|78,51|43,57|<br>';
