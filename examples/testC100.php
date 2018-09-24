<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C100;

$std = new stdClass();
$std->IND_OPER = '0';
$std->IND_EMIT = '0';
$std->COD_PART = str_repeat('1234567890',6);
$std->COD_SIT = '07';
$std->SER = '000';
$std->SUB = '000';
$std->NUM_DOC = '123456789';
$std->CHV_NFE = '43171207364617000135550000000120141000120146';
$std->DT_DOC = date('dmY');
$std->DT_E_S = date('dmY');
$std->VL_DOC = 50.23;
$std->IND_PGTO = 0;
$std->VL_DESC = 0;
$std->VL_ABAT_NT = 50.23;
$std->VL_BC_ICMS = 50.23;
$std->VL_MERC = 50;
$std->IND_FRT = '9';
$std->VL_FRT = 10.36;
$std->VL_SEG = 2.54;
$std->VL_OUT_DA = 1.60;
$std->VL_BC_ICMS= 1.60;
$std->VL_ICMS = 10.36;
$std->VL_BC_ICMS_ST = 0;
$std->VL_ICMS_ST = 0;
$std->VL_IPI = 0;
$std->VL_PIS = 0;
$std->VL_COFINS = 0;
$std->VL_PIS_ST = 0;
$std->VL_COFINS_ST = 0;
try {
    $b0 = new C100($std);
    echo "{$b0}".'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '|C100|0|0|123456789012345678901234567890123456789012345678901234567890||07|000|123456789|43171207364617000135550000000120141000120146|24092018|24092018|50.23||0|50.23|50|9|10.36|2.54|1.6|1.6|10.36|0|0|0|0|0|0|0|<br>';
