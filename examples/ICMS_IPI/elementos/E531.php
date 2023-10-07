<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\E531;

$std = new stdClass();
$std->COD_PART = '12304325896448274328093';
$std->COD_MOD = '01';
$std->SER = '1234';
$std->SUB = 123;
$std->NUM_DOC = 123456789;
$std->DT_DOC = 27092018;
$std->COD_ITEM = '12840129381349623879';
$std->VL_AJ_ITEM = 125.00;
$std->CHV_NFE = '12321323211232132321123213232112321323211234';

try {
    $b0 = new E531($std);
    echo "{$b0}".'<br>';
    echo '|E531|12304325896448274328093|01|1234|123|123456789|27092018|12840129381349623879|125.00|12321323211232132321123213232112321323211234|<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}
