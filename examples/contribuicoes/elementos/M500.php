<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\M500;

$std = new stdClass();
$std->COD_CRED = '632';
$std->IND_CRED_ORI = '1';
$std->VL_BC_COFINS = 25.62;
$std->ALIQ_COFINS = 671;
$std->QUANT_BC_COFINS = 100.5;
$std->ALIQ_COFINS_QUANT = 166.5;
$std->VL_CRED = 58.3;
$std->VL_AJUS_ACRES = 78.63;
$std->VL_AJUS_REDUC = 80.41;
$std->VL_CRED_DIFER = 59.54;
$std->VL_CRED_DISP = 3.37;
$std->IND_DESC_CRED = '0';
$std->VL_CRED_DESC = 47.84;
$std->SLD_CRED = 171.2;

try {
$m500 = new M500($std);
echo "{$m500}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|M500|632|1|25,62|671,0000|100,500|166,5000|58,30|78,63|80,41|59,54|3,37|0|47,84|171,20|
<br>';
