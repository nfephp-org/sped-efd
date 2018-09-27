<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\E111;

$std = new stdClass();
$std->COD_AJ_APUR = '12345678';
$std->DESCR_COMPL_AJ = '3857';
$std->VL_AJ_APUR = 34543;

try {
    $b0 = new E111($std);
    echo "{$b0}".'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '|E111|12345678|3857|34543|<br>';