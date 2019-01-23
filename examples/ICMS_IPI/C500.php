<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C500    ;

$std = new stdClass();
$std->IND_OPER = '0';
$std->IND_EMIT = 'D';
$std->COD_PART = '33498795948312';
$std->COD_MOD = '02';
$std->COD_SIT = '02';
$std->SER = '3443';
$std->SUB = '770';
$std->COD_CONS = 'D6';
$std->NUM_DOC = '767208861';
$std->DT_DOC = '28092018';
$std->DT_E_S = '28092018';
$std->VL_DOC = 14.19;
$std->VL_DESC = 19.44;
$std->VL_FORN = 11.44;
$std->VL_SERV_NT = 15.1;
$std->VL_TERC = 12.31;
$std->VL_DA = 60.93;
$std->VL_BC_ICMS = 32.77;
$std->VL_ICMS = 54.40;
$std->VL_BC_ICMS_ST = 7.1;
$std->VL_ICMS_ST = 36.78;
$std->COD_INF = '3AETZL';
$std->VL_PIS = 86.73;
$std->VL_COFINS = 16.85;
$std->TP_LIGACAO = '2';
$std->COD_GRUPO_TENSAO = '12';

try {
$c500 = new C500($std);
echo "{$c500}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|C500|0|D|33498795948312|02|02|3443|770|D6|767208861|28092018|28092018|14,19|19,44|11,44|15,10|12,31|60,93|32,77|54,40|7,10|36,78|3AETZL|86,73|16,85|2|12|<br>';
