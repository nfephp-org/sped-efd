<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\Z1210;

$std = new stdClass();
$std->CNPJ = '40814340000170';
$std->CST_PIS = '99';
$std->COD_PART = '3603190985943412';
$std->DT_OPER = '04102018';
$std->VL_OPER = 23.24;
$std->VL_BC_PIS = 61.86;
$std->ALIQ_PIS = 491.1;
$std->VL_PIS = 303.79446;
$std->COD_CTA = '9591709093586198';
$std->DESC_COMPL = 'TWIBY0';

try {
$z1210 = new Z1210($std);
echo "{$z1210}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|1210|40814340000170|99|3603190985943412|04102018|23,24|61,86|491,1000|303,79|9591709093586198|TWIBY0|<br>';
