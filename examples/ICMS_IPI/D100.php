<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';


use NFePHP\EFD\Elements\ICMSIPI\D100;

$std = new stdClass();
$std->IND_OPER = '0';
$std->IND_EMIT = '0';
$std->COD_PART = str_repeat('123456',2);
$std->COD_MOD = '67';
$std->COD_SIT = '07';
$std->SER = '000';
$std->SUB = '000';
$std->NUM_DOC = '123456789';
$std->DT_DOC = date('dmY');
$std->DT_A_P = date('dmY');
$std->TP_CT_E = '0';
$std->CHV_CTE_REF = '12345678901234567890123456789012345678901234';
$std->VL_DOC = 50.23;
$std->VL_DESC = 0;
$std->IND_FRT = 0;
$std->VL_SERV = 50.23;
$std->VL_BC_ICMS = 50.23;
$std->VL_ICMS = 10.36;
$std->VL_NT = 0;
$std->CHV_CTE = '43171207364617000135550000000120141000120146';
$std->COD_INF = '111111';
$std->COD_CTA = '123456';
$std->COD_MUN_ORIG = (string)3100104;
$std->COD_MUN_DEST = (string)4219507;
try {
    $b0 = new D100($std);
    echo "{$b0}".'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}
//    |D100|IND_OPER|IND_EMIT|COD_PART                                                    |COD_MOD|COD_SIT|SER|SUB|NUM_DOC  |CHV_CTE                                              |DT_DOC  |DT_A_P|TP_CT_E|CHV_CTE_REF|VL_DOC|VL_DESC|IND_FRT|VL_SERV|VL_BC_ICMS|VL_ICMS|VL_NT|COD_INF|COD_CTA|COD_MUN_ORIG|COD_MUN_DEST|
echo '|D100|0|0|123456123456|67|07|000|000|123456789|43171207364617000135550000000120141000120146|02072019|02072019|0|12345678901234567890123456789012345678901234|50,23|0,00|0|50,23|50,23|10,36|0,00|111111|123456|3100104|4219507|<br>';
