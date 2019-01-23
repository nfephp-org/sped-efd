<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\C870;

$std = new stdClass();
$std->COD_ITEM = '1152836862137921';
$std->CFOP = 2333;
$std->VL_ITEM = 93.95;
$std->VL_DESC = 67.24;
$std->CST_PIS = '99';
$std->VL_BC_PIS = 85.46;
$std->ALIQ_PIS = 735.2;
$std->VL_PIS = 78.82;
$std->CST_COFINS = '99';
$std->VL_BC_COFINS = 91.43;
$std->ALIQ_COFINS = 452.7;
$std->VL_COFINS = 0.77;
$std->COD_CTA = '9845043078855275';

try {
$c870 = new C870($std);
echo "{$c870}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|C870|1152836862137921|6532|93,95|67,24|99|85,46|735,2000|78,82|99|91,43|452,7000|0,77|9845043078855275|<br>';
