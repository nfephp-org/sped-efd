<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\G110;

echo '<pre>';
$std = new stdClass();
$std->DT_INI = '01082018';
$std->DT_FIN = '31082018';
$std->SALDO_IN_ICMS = 100022.33;
$std->SOM_PARC = 333.33;
$std->VL_TRIB_EXP = 9000.50;
$std->VL_TOTAL = 4040404.333;
$std->IND_PER_SAI = 7348.43384;
$std->ICMS_APROP = 56493.98;
$std->SOM_ICMS_OC = 840505.77;

try {
    $b0 = new G110($std);
    echo "{$b0}".'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '|G110|01082018|31082018|100022,33|333,33|9000,50|4040404,33|7348,43384000|56493,98|840505,77|<br>';
