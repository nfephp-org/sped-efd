<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\Z1923;

$std = new stdClass();
$std->COD_PART = '937401297348932701';
$std->COD_MOD = '32';
$std->SER = '9230';
$std->SUB = 342;
$std->NUM_DOC = 123456789;
$std->DT_DOC = 12122017;
$std->COD_ITEM = '8457519302472083';
$std->VL_AJ_ITEM = 120.00;
$std->CHV_DOCE = '43171207364617000135550000000120141000120146';

try {
    $b1 = new Z1923($std);
    echo "{$b1}".'<br>';
    echo '|1923|937401297348932701|32|9230|342|123456789|12122017|8457519302472083|120.00|43171207364617000135550000000120141000120146|';
} catch (\Exception $e) {
    echo $e->getMessage();
}