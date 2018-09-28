<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C890;

$std = new stdClass();
$std->CST_ICMS = '960';
$std->CFOP = '1872';
$std->ALIQ_ICMS = 647.8;
$std->VL_OPR = 45.40;
$std->VL_BC_ICMS = 92.59;
$std->VL_ICMS = 78.29;
$std->COD_OBS = 'LUAW8W';

try {
$c890 = new C890($std);
echo "{$c890}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|C890|960|1872|647,80|45,40|92,59|78,29|LUAW8W|<br>';
