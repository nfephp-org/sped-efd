<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\M100;

$std = new stdClass();
$std->COD_CRED = '982';
$std->IND_CRED_ORI = '1';
$std->VL_BC_PIS = 88.56;
$std->ALIQ_PIS = 856.1;
$std->QUANT_BC_PIS = 127.7;
$std->ALIQ_PIS_QUANT = 737.5;
$std->VL_CRED = 52.69;
$std->VL_AJUS_ACRES = 3.90;
$std->VL_AJUS_REDUC = 49.45;
$std->VL_CRED_DIF = 24.11;
$std->VL_CRED_DISP = 77.77;
$std->IND_DESC_CRED = '0';
$std->VL_CRED_DESC = 20.69;
$std->SLD_CRED = 273.2;

try {
$m100 = new M100($std);
echo "{$m100}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|M100|982|1|88,56|856,1000|127,700|737,5000|52,69|3,90|49,45|24,11|77,77|0|20,69|273,20|
<br>';
