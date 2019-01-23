<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\M211;

$std = new stdClass();
$std->IND_TIP_COOP = '1';
$std->VL_BC_CONT_ANT_EXC_COOP = 37.60;
$std->VL_EXC_COOP_GER = 15.28;
$std->VL_EXC_ESP_COOP = 99.22;
$std->VL_BC_CONT = 53.51;

try {
$m211 = new M211($std);
echo "{$m211}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|M211|1|37,60|15,28|99,22|53,51|<br>';
