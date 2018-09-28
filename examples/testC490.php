<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C490;

$std = new stdClass();
$std->CST_ICMS = '759';
$std->CFOP = '7395';
$std->ALIQ_ICMS = 421;
$std->VL_OPR = 57.95;
$std->VL_BC_ICMS = 7.69;
$std->VL_ICMS = 17.76;
$std->COD_OBS = '7QW93U';

try {
    $c490 = new C490($std);
    echo "{$c490}".'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '|C490|759|7395|421,00|57,95|7,69|17,76|7QW93U|<br>';
