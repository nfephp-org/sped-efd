<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\C181;

$std = new stdClass();
$std->CST_PIS = '08';
$std->CFOP = '2201';
$std->VL_ITEM = 94.27;
$std->VL_DESC = 31.9;
$std->VL_BC_PIS = 88.12;
$std->ALIQ_PIS = 971.1;
$std->QUANT_BC_PIS = 412.9;
$std->ALIQ_PIS_QUANT = 163;
$std->VL_PIS = 38.25;
$std->COD_CTA = '3389423897549';

try {
$c181 = new C181($std);
echo "{$c181}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|C181|08|2201|94,27|31,90|88,12|971,1000|412,900|163,0000|38,25|3389423897549|<br>';
