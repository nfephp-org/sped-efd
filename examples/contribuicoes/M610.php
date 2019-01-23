<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\M610;

$std = new stdClass();
$std->COD_CONT = '78';
$std->VL_REC_BRT = 26.16;
$std->VL_BC_CONT = 92.39;
$std->ALIQ_COFINS = 946.5;
$std->QUANT_BC_COFINS = 93.2;
$std->ALIQ_COFINS_QUANT = 570;
$std->VL_CONT_APUR = 72.95;
$std->VL_AJUS_ACRES = 53.59;
$std->VL_AJUS_REDUC = 77.91;
$std->VL_CONT_DIFER = 3.56;
$std->VL_CONT_DIFER_ANT = 34.54;
$std->VL_CONT_PER = 61.23;

try {
$m610 = new M610($std);
echo "{$m610}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|M610|78|26,16|92,39|946,5000|93,200|570,0000|72,95|53,59|77,91|3,56|34,54|61,23|
<br>';
