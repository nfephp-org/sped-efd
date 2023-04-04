<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\Z1501;

$std = new stdClass();
$std->COD_PART = '3926482036758789';
$std->COD_ITEM = '1641870799849210';
$std->COD_MOD = '41';
$std->SER = 'ZBYF';
$std->SUB_SER = '0WA';
$std->NUM_DOC = '113626932';
$std->DT_OPER = '04102018';
$std->CHV_NFE = '43171207364617000135550000000120141000120146';
$std->VL_OPER = 77.53;
$std->CFOP = '5940';
$std->NAT_BC_CRED = '2V';
$std->IND_ORIG_CRED = '1';
$std->CST_COFINS = '99';
$std->VL_BC_COFINS = 96.74;
$std->ALIQ_COFINS = 473.3;
$std->VL_COFINS = 457.87042;
$std->COD_CTA = '0289136156190164';
$std->COD_CCUS = '8563754399994860';
$std->DESC_COMPL = 'IZE0NM';
$std->PER_ESCRIT = '268116';
$std->CNPJ = '40814340000170';

try {
$z1501 = new Z1501($std);
echo "{$z1501}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|1501|3926482036758789|1641870799849210|41|ZBYF|0WA|113626932|04102018|43171207364617000135550000000120141000120146|77,53|5940|2V|1|99|96,74|473,3000|457,87|0289136156190164|8563754399994860|IZE0NM|268116|40814340000170|<br>';
