<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\G125;

$std = new stdClass();
$std->COD_IND_BEM = '9496420356835948';
$std->DT_MOV = '05102018';
$std->TIPO_MOV = 'IA';
$std->VL_IMOB_ICMS_OP = 81.51;
$std->VL_IMOB_ICMS_ST = 31.50;
$std->VL_IMOB_ICMS_FRT = 16.26;
$std->VL_IMOB_ICMS_DIF = 97.3;
$std->NUM_PARC = '176';
$std->VL_PARC_PASS = 98.65;

try {
$g125 = new G125($std);
echo "{$g125}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|G125|9496420356835948|05102018|IA|81,51|31,50|16,26|97,30|176|98,65|<br>';
