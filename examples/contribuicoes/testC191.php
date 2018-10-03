<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\C191;

$std = new stdClass();
$std->CNPJ_CPF_PART = '40814340000170';
$std->CST_PIS = '54';
$std->CFOP = '6213';
$std->VL_ITEM = 60.26;
$std->VL_DESC = 98.62;
$std->VL_BC_PIS = 79.33;
$std->ALIQ_PIS = 270.5;
$std->QUANT_BC_PIS = 156.3;
$std->ALIQ_PIS_QUANT = 22.9;
$std->VL_PIS = 48.96;
$std->COD_CTA = '234089572345';

try {
$c191 = new C191($std);
echo "{$c191}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|C191|40814340000170|54|6213|60,26|98,62|79,33|270,5000|156,300|22,9000|48,96|234089572345|<br>';
