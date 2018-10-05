<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\Z1100;

$std = new stdClass();
$std->PER_APU_CRED = '565768';
$std->ORIG_CRED = '1';
$std->CNPJ_SUC = '40814340000170';
$std->COD_CRED = '905';
$std->VL_CRED_APU = 69.50;
$std->VL_CRED_EXT_APU = 6.73;
$std->VL_TOT_CRED_APU = 20.14;
$std->VL_CRED_DESC_PA_ANT = 93.83;
$std->VL_CRED_PER_PA_ANT = 45.12;
$std->VL_CRED_DCOMP_PA_ANT = 49.88;
$std->SD_CRED_DISP_EFD = 483.4;
$std->VL_CRED_DESC_EFD = 53.89;
$std->VL_CRED_PER_EFD = 79.29;
$std->VL_CRED_DCOMP_EFD = 20.38;
$std->VL_CRED_TRANS = 25.55;
$std->VL_CRED_OUT = 59.9;
$std->SLD_CRED_FIM = 40.4;

try {
$z1100 = new Z1100($std);
echo "{$z1100}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|1100|565768|1|40814340000170|905|69,50|6,73|20,14|93,83|45,12|49,88|483,40|53,89|79,29|20,38|25,55|59,90|40,40|<br>';
