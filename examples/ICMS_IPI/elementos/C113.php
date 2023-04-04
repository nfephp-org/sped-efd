<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C113;

$std = new stdClass();
$std->IND_OPER = '0';
$std->IND_EMIT = '0';
$std->COD_MOD = '57';
$std->COD_PART = str_repeat('1234567890',1).'-AbCDe';
$std->COD_SIT = '07';
$std->SER = '000';
$std->SUB = '000';
$std->NUM_DOC = '123456789';
$std->CHV_DOCE = '43171207364617000135550000000120141000120146';
try {
    $b0 = new C113($std);
    echo "{$b0}".'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '|C113|0|0|123456789012345678901234567890123456789012345678901234567890|57|07|000|123456789|43171207364617000135550000000120141000120146|<br>';
