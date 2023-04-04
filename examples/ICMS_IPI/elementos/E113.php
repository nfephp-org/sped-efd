<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\E113;

$std = new stdClass();
$std->COD_PART = '123456789';
$std->COD_MOD = '73';
$std->SER = '9348';
$std->SUB = 635;
$std->NUM_DOC = 692647313;
$std->DT_DOC = 26092018;
$std->COD_ITEM = '103585733024';
$std->VL_AJ_ITEM = 49373825;
$std->CHV_DOCE = '12321323211232132321123213232112321323211234';

try {
    $b0 = new E113($std);
    echo "{$b0}".'<br>';
    echo '|E113|123456789|73|9348|635|692647313|26092018|103585733024|49373825|12321323211232132321123213232112321323211234|<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}
