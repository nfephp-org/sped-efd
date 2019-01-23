<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C116;

$std = new stdClass();
$std->COD_MOD = '59';
$std->NR_SAT = '123456789';
$std->CHV_CFE = '43171207364617000135550000000120141000120146';
$std->NUM_CFE = '123456';
$std->DT_DOC = '22092018';
try {
    $c116 = new C116($std);
    echo "{$c116}".'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '|C116|59|123456789|43171207364617000135550000000120141000120146|123456|22092018|<br>';
