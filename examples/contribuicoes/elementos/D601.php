<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\D601;

$std = new stdClass();
$std->COD_CLASS = '2290';
$std->VL_ITEM = 90.51;
$std->VL_DESC = 7.32;
$std->CST_PIS = '99';
$std->VL_BC_PIS = 15.81;
$std->ALIQ_PIS = 88.5;
$std->VL_PIS = 13.99185;
$std->COD_CTA = '6126345812659332';

try {
$d601 = new D601($std);
echo "{$d601}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|D601|2290|90,51|7,32|99|15,81|88,5000|13,99|6126345812659332|
<br>';
