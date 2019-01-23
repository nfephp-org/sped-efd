<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C690;

$std = new stdClass();
$std->CST_ICMS = '716';
$std->CFOP = '8678';
$std->ALIQ_ICMS = 656.4;
$std->VL_OPR = 20.55;
$std->VL_BC_ICMS = 96.11;
$std->VL_ICMS = 0.84;
$std->VL_RED_BC = 62.23;
$std->VL_BC_ICMS_ST = 19.41;
$std->VL_ICMS_ST = 63.42;
$std->COD_OBS = '01PMHR';

try {
$c690 = new C690($std);
echo "{$c690}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|C690|716|8678|656,40|20,55|96,11|0,84|62,23|19,41|63,42|01PMHR|<br>';
