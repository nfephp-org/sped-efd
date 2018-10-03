<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\C175;

$std = new stdClass();
$std->CFOP = '9494';
$std->VL_OPR = 54.61;
$std->VL_DESC = 99.4;
$std->CST_PIS = '99';
$std->VL_BC_PIS = 59.42;
$std->ALIQ_PIS = 821.7;
$std->QUANT_BC_PIS = 682.3;
$std->ALIQ_PIS_QUANT = 116.2;
$std->VL_PIS = 56.30;
$std->CST_COFINS = '12';
$std->VL_BC_COFINS = 74.95;
$std->ALIQ_COFINS = 781.4;
$std->QUANT_BC_COFINS = 65.3;
$std->ALIQ_COFINS_QUANT = 52.3;
$std->VL_COFINS = 3415.19;
$std->COD_CTA = '98759628469';
$std->INFO_COMPL = 'Info complement';

try {
$c175 = new C175($std);
echo "{$c175}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|C175|9494|54,61|99,40|99|59,42|821,7000|682,300|116,2000|56,30|12|74,95|781,4000|65,300|52,3000|3415,19|98759628469|Info complement|
<br>';
