<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\E313;

$std = new stdClass();
$std->COD_PART = '903843823283239201';
$std->COD_MOD = '22';
$std->SER = '6823';
$std->SUB = 203;
$std->NUM_DOC = 123456789;
$std->DT_DOC = 26092018;
$std->COD_ITEM = '2309437466862012';
$std->VL_AJ_ITEM = 190274;
$std->CHV_DOCE = '12321323211232132321123213232112321323211234';

try {
    $b0 = new E313($std);
    echo "{$b0}".'<br>';
    echo '|E313|903843823283239201|22|6823|203|123456789|26092018|2309437466862012|190274|12321323211232132321123213232112321323211234|<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}
