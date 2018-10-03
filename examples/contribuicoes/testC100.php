<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\C100;

$std = new stdClass();
$std->IND_OPER = '1';
$std->IND_EMIT = '0';
$std->COD_PART = '33423475';
$std->COD_MOD = 'YV';
$std->COD_SIT = '02';
$std->SER = 'QG3';
$std->NUM_DOC = '651003764';
$std->CHV_NFE = '43171207364617000135550000000120141000120146';
$std->DT_DOC = '02102018';
$std->DT_E_S = '02102018';
$std->VL_DOC = 78.68;
$std->IND_PGTO = '1';
$std->VL_DESC = 88.77;
$std->VL_ABAT_NT = 38.66;
$std->VL_MERC = 80.21;
$std->IND_FRT = '2';
$std->VL_FRT = 95.7;
$std->VL_SEG = 82.70;
$std->VL_OUT_DA = 23.65;
$std->VL_BC_ICMS = 89.42;
$std->VL_ICMS = 76.11;
$std->VL_BC_ICMS_ST = 34.60;
$std->VL_ICMS_ST = 41.23;
$std->VL_IPI = 3.92;
$std->VL_PIS = 73.31;
$std->VL_COFINS = 49.12;
$std->VL_PIS_ST = 67.24;
$std->VL_COFINS_ST = 35.48;

try {
$c100 = new C100($std);
echo "{$c100}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|C100|1|0|33423475|YV|02|QG3|651003764|43171207364617000135550000000120141000120146|02102018|02102018|78,68|1|88,77|38,66|80,21|2|95,70|82,70|23,65|89,42|76,11|34,60|41,23|3,92|73,31|49,12|67,24|35,48|<br>';
