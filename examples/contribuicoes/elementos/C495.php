<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\C495;

$std = new stdClass();
$std->COD_ITEM = '2345675432';
$std->CST_COFINS = '49';
$std->CFOP = '9121';
$std->VL_ITEM = 91.75;
$std->VL_BC_COFINS = 99.17;
$std->ALIQ_COFINS = 834.1;
$std->QUANT_BC_COFINS = 720.4;
$std->ALIQ_COFINS_QUANT = 617.9;
$std->VL_COFINS = 445135.16;
$std->COD_CTA = '8765877657';

try {
$c495 = new C495($std);
echo "{$c495}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|C495|2345675432|49|9121|91,75|99,17|834,1000|720,400|617,9000|445135,16|8765877657|
<br>';
