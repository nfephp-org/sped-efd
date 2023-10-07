<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\C190;

$std = new stdClass();
$std->COD_MOD = '55';
$std->DT_REF_INI = '02102018';
$std->DT_REF_FIN = '02102018';
$std->COD_ITEM = '9485398748';
$std->COD_NCM = 'DR98QLZF';
$std->EX_IPI = 'V3O';
$std->VL_TOT_ITEM = 7.18;

try {
$c190 = new C190($std);
echo "{$c190}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|C190|55|02102018|02102018|9485398748|DR98QLZF|V3O|7,18|<br>';
