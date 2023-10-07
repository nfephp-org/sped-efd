<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\Z1900;

$std = new stdClass();
$std->CNPJ = '40814340000170';
$std->COD_MOD = '98';
$std->SER = 'TC1Q';
$std->SUB_SER = '356392138517642547';
$std->COD_SIT = '00';
$std->VL_TOT_REC = 10.77;
$std->QUANT_DOC = '3419';
$std->CST_PIS = '99';
$std->CST_COFINS = '99';
$std->CFOP = '7731';
$std->INF_COMPL = 'LOLOGW';
$std->COD_CTA = '8283234125772844';

try {
$z1900 = new Z1900($std);
echo "{$z1900}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|1900|40814340000170|98|TC1Q|356392138517642547|00|10,77|3419|99|99|7731|LOLOGW|8283234125772844|<br>';
