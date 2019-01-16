<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C197;

$std = new stdClass();
$std->COD_AJ = 'UWE6AXZIJH';
$std->DESCR_COMPL_AJ = '3QILS8';
$std->COD_ITEM = '221322347665';
$std->VL_BC_ICMS = 23.64;
$std->ALIQ_ICMS = 465.3;
$std->VL_ICMS = 30.86;
$std->VL_OUTROS = 96.79;

try {
    $c197 = new C197($std);
    echo "{$c197}".'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '|C197|UWE6AXZIJH|3QILS8|221322347665|23,64|465,30|30,86|96,79|<br>';
