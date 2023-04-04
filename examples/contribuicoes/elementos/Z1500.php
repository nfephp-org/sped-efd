<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\Z1500;

$std = new stdClass();
$std->PER_APU_CRED = '551919';
$std->ORIG_CRED = '01';
$std->CNPJ_SUC = '40814340000170';
$std->COD_CRED = '208';
$std->VL_CRED_APU = 96.67;
$std->VL_CRED_EXT_APU = 68.67;
$std->VL_TOT_CRED_APU = 91.43;
$std->VL_CRED_DESC_PA_ANT = 67.84;
$std->VL_CRED_PER_PA_ANT = 41.5;
$std->VL_CRED_DCOMP_PA_ANT = 13.62;
$std->SD_CRED_DISP_EFD = 159.4;
$std->VL_CRED_DESC_EFD = 64.11;
$std->VL_CRED_PER_EFD = 92.6;
$std->VL_CRED_DCOMP_EFD = 88.20;
$std->VL_CRED_TRANS = 87.55;
$std->VL_CRED_OUT = 18.77;
$std->SLD_CRED_FIM = 652.1;

try {
$z1500 = new Z1500($std);
echo "{$z1500}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|1500|551919|01|40814340000170|208|96,67|68,67|91,43|67,84|41,50|13,62|159,40|64,11|92,60|88,20|87,55|18,77|652,10|<br>';
