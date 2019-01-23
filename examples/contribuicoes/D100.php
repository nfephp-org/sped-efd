<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\D100;

$std = new stdClass();
$std->IND_OPER = '0';
$std->IND_EMIT = '1';
$std->COD_PART = '68062766274505287791340';
$std->COD_MOD = '07';
$std->COD_SIT = '00';
$std->SER = 'IH1C';
$std->SUB = 'NVZ';
$std->NUM_DOC = '85759780';
$std->CHV_CTE = '43171207364617000135550000000120141000120146';
$std->DT_DOC = '03102018';
$std->DT_A_P = '03102018';
$std->TP_CTE = '1';
$std->CHV_CTE_REF = '43171207364617000135550000000120141000120146';
$std->VL_DOC = 36.71;
$std->VL_DESC = 79.11;
$std->IND_FRT = '1';
$std->VL_SERV = 45.35;
$std->VL_BC_ICMS = 93.49;
$std->VL_ICMS = 46.12;
$std->VL_NT = 40.5;
$std->COD_INF = '001693';
$std->COD_CTA = '8478656516503497';

try {
$d100 = new D100($std);
echo "{$d100}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|D100|0|1|68062766274505287791340|07|00|IH1C|NVZ|85759780|43171207364617000135550000000120141000120146|03102018|03102018|1|43171207364617000135550000000120141000120146|36,71|79,11|1|45,35|93,49|46,12|40,50|001693|8478656516503497|<br>';
