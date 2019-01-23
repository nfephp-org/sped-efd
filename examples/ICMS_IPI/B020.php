<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\B020;

$std = new stdClass();
$std->IND_OPER = '0';
$std->IND_EMIT = '1';
$std->COD_PART = '12039350584309853249086';
$std->COD_MOD = '3B';
$std->COD_SIT = 41;
$std->SER = '123';
$std->NUM_DOC = 310981273;
$std->CHV_NFE = '12039327432658932701237269820167832432983248';
$std->DT_DOC = 28092018;
$std->COD_MUN_SERV = '1234567';
$std->VL_CONT = 100.00;
$std->VL_MAT_TERC = 110.00;
$std->VL_SUB = 200.00;
$std->VL_ISNT_ISS = 80.00;
$std->VL_DED_BC = 10.00;
$std->VL_BC_ISS = 65.70;
$std->VL_BC_ISS_RT = 130.00;
$std->VL_ISS_RT = 456.70;
$std->VL_ISS = 12.00;
$std->COD_INF_OBS = '123098327425796324037138957345012372356';

try {
    $b0 = new B020($std);
    echo "{$b0}".'<br>';
    echo '|B020|0|1|12039350584309853249086|3B|41|123|310981273|12039327432658932701237269820167832432983248|28092018|1234567|100.00|110.00|200.00|80.00|10.00|65.70|130.00|456.70|12.00|123098327425796324037138957345012372356|<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}
