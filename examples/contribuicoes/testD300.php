<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\D300;

$std = new stdClass();
$std->COD_MOD = '13';
$std->SER = '1HKO';
$std->SUB = '254';
$std->NUM_DOC_INI = '736636';
$std->NUM_DOC_FIN = '428991';
$std->CFOP = '9049';
$std->DT_REF = '03102018';
$std->VL_DOC = 22.52;
$std->VL_DESC = 23.81;
$std->CST_PIS = '99';
$std->VL_BC_PIS = 59.36;
$std->ALIQ_PIS = 462.3;
$std->VL_PIS = 274.42128;
$std->CST_COFINS = '99';
$std->VL_BC_COFINS = 86.83;
$std->ALIQ_COFINS = 887.5;
$std->VL_COFINS = 770.61625;
$std->COD_CTA = '8130361475117298';

try {
$d300 = new D300($std);
echo "{$d300}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|D300|13|1HKO|254|736636|428991|9049|03102018|22,52|23,81|99|59,36|462,3000|274,42|99|86,83|887,5000|770,62|8130361475117298|<br>';
