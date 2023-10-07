<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\G126;

$std = new stdClass();
$std->DT_INI = '05102018';
$std->DT_FIM = '05102018';
$std->NUM_PARC = '241';
$std->VL_PARC_PASS = 73.22;
$std->VL_TRIB_OC = 4.4;
$std->VL_TOTAL = 63.96;
$std->IND_PER_SAI = 748.7;
$std->VL_PARC_APROP = 86.69;

try {
$g126 = new G126($std);
echo "{$g126}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|G126|05102018|05102018|241|73,22|4,40|63,96|748,70000000|86,69|<br>';
