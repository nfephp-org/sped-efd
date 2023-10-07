<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\Z1500;

$std = new stdClass();
$std->IND_OPER = '1';
$std->IND_EMIT = '0';
$std->COD_PART = '129837210397342984635';
$std->COD_MOD = '11';
$std->COD_SIT = '07';
$std->SER = '1234';
$std->SUB = 123;
$std->COD_CONS = '02';
$std->NUM_DOC = 123340139;
$std->DT_DOC = 10102017;
$std->DT_E_S = 10112017;
$std->VL_DOC = 12;
$std->VL_DESC = 21;
$std->VL_FORN = 51;
$std->VL_SERV_NT = 43;
$std->VL_TERC = 86;
$std->VL_DA = 90;
$std->VL_BC_ICMS = 17;
$std->VL_ICMS = 65;
$std->VL_BC_ICMS_ST = 47;
$std->VL_ICMS_ST = 80;
$std->COD_INF = '123456';
$std->VL_PIS = 60;
$std->VL_COFINS = 45;
$std->TP_LIGACAO = 3;
$std->COD_GRUPO_TENSAO = '10';

try {
    $b1 = new Z1500($std);
    echo "{$b1}".'<br>';
    echo '|1500|1|0|129837210397342984635|11|07|1234|123|02|123340139|10102017|10112017|12|21|51|43|86|90|17|65|47|80|123456|60|45|3|10|';
} catch (\Exception $e) {
    echo $e->getMessage();
}
