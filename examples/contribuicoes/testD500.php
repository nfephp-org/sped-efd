<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\D500;

$std = new stdClass();
$std->IND_OPER = '0';
$std->IND_EMIT = '0';
$std->COD_PART = '8518198991213266042';
$std->COD_MOD = '22';
$std->COD_SIT = '00';
$std->SER = 'WQP6';
$std->SUB = '943';
$std->NUM_DOC = '358548985';
$std->DT_DOC = '03102018';
$std->DT_A_P = '03102018';
$std->VL_DOC = 22.29;
$std->VL_DESC = 11.41;
$std->VL_SERV = 28.65;
$std->VL_SERV_NT = 78.41;
$std->VL_TERC = 46.55;
$std->VL_DA = 25.74;
$std->VL_BC_ICMS = 79.17;
$std->VL_ICMS = 5.52;
$std->COD_INF = '980591';
$std->VL_PIS = 11.44;
$std->VL_COFINS = 29.47;

try {
$d500 = new D500($std);
echo "{$d500}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|D500|0|0|8518198991213266042|22|00|WQP6|943|358548985|03102018|03102018|22,29|11,41|28,65|78,41|46,55|25,74|79,17|5,52|980591|11,44|29,47|<br>';
