<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\M620;

$std = new stdClass();
$std->IND_AJ = '0';
$std->VL_AJ = 29.4;
$std->COD_AJ = '78';
$std->NUM_DOC = 'VRV9VL';
$std->DESCR_AJ = '7DBV8V';
$std->DT_REF = '05102018';

try {
$m620 = new M620($std);
echo "{$m620}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|M620|0|29,40|78|VRV9VL|7DBV8V|05102018|
<br>';
