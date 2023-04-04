<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\M611;

$std = new stdClass();
$std->IND_TIP_COOP = '2';
$std->VL_BC_CONT_ANT_EXC_COOP = 26.49;
$std->VL_EXC_COOP_GER = 3.92;
$std->VL_EXC_ESP_COOP = 1.40;
$std->VL_BC_CONT = 90.31;

try {
$m611 = new M611($std);
echo "{$m611}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|M611|2|26,49|3,92|1,40|90,31|<br>';
