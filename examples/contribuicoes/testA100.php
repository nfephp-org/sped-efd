<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\A100;

$std = new stdClass();
$std->IND_OPER = '1';
$std->IND_EMIT = 'I';
$std->COD_PART = '934875938';
$std->COD_SIT = '02';
$std->SER = 'D53424324';
$std->SUB = 'EW43539';
$std->NUM_DOC = '0439853940';
$std->CHV_NFSE = '43171207364617000135550000000120141000120146';
$std->DT_DOC = '01102018';
$std->DT_EXE_SERV = '01102018';
$std->VL_DOC = 72.26;
$std->IND_PGTO = '9';
$std->VL_DESC = 62.98;
$std->VL_BC_PIS = 42.30;
$std->VL_PIS = 1.45;
$std->VL_BC_COFINS = 47.85;
$std->VL_COFINS = 83.49;
$std->VL_PIS_RET = 79.81;
$std->VL_COFINS_RET = 21.20;
$std->VL_ISS = 69.97;

try {
$a100 = new A100($std);
echo "{$a100}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|A100|1|I|934875938|02|D53424324|EW43539|0439853940|43171207364617000135550000000120141000120146|01102018|01102018|72,26|9|62,98|42,30|1,45|47,85|83,49|79,81|21,20|69,97|<br>';
