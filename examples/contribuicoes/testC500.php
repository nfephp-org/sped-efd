<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\C500;

$std = new stdClass();
$std->COD_PART = '57485737865';
$std->COD_MOD = '00';
$std->COD_SIT = '22';
$std->SER = 'C5A4';
$std->SUB = '879';
$std->NUM_DOC = '610236848';
$std->DT_DOC = '02102018';
$std->DT_ENT = '02102018';
$std->VL_DOC = 1.35;
$std->VL_ICMS = 32.70;
$std->COD_INF = 'XWOIUE';
$std->VL_PIS = 65.6;
$std->VL_COFINS = 62.62;

try {
$c500 = new C500($std);
echo "{$c500}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|C500|57485737865|00|22|C5A4|879|610236848|02102018|02102018|1,35|32,70|XWOIUE|65,60|62,62|<br>';
