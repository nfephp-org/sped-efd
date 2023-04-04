<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\C185;

$std = new stdClass();
$std->CST_COFINS = '03';
$std->CFOP = '4970';
$std->VL_ITEM = 71.77;
$std->VL_DESC = 29.43;
$std->VL_BC_COFINS = 99.17;
$std->ALIQ_COFINS = 834.1;
$std->QUANT_BC_COFINS = 720.4;
$std->ALIQ_COFINS_QUANT = 617.9;
$std->VL_COFINS = 445135.16;
$std->COD_CTA = '45987347548';

try {
$c185 = new C185($std);
echo "{$c185}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|C185|03|4970|71,77|29,43|99,17|834,1000|720,400|617,9000|445135,16|45987347548|<br>';
