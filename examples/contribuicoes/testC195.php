<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\C195;

$std = new stdClass();
$std->CNPJ_CPF_PART = '40814340000170';
$std->CST_COFINS = '54';
$std->CFOP = '3348';
$std->VL_ITEM = 29.98;
$std->VL_DESC = 46.51;
$std->VL_BC_COFINS = 99.17;
$std->ALIQ_COFINS = 834.1;
$std->QUANT_BC_COFINS = 720.4;
$std->ALIQ_COFINS_QUANT = 617.9;
$std->VL_COFINS = 445135.16;
$std->COD_CTA = '497695348';

try {
$c195 = new C195($std);
echo "{$c195}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|C195|40814340000170|54|3348|29,98|46,51|99,17|834,1000|720,400|617,9000|445135,16|497695348|
<br>';
