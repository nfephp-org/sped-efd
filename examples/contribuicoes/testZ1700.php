<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\Z1700;

$std = new stdClass();
$std->IND_NAT_RET = '01';
$std->PR_REC_RET = '436257';
$std->VL_RET_APU = 600.52;
$std->VL_RET_DED = 13.55;
$std->VL_RET_PER = 7.4;
$std->VL_RET_DCOMP = 55.92;
$std->SLD_RET = 523.65;

try {
$z1700 = new Z1700($std);
echo "{$z1700}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|1700|01|436257|600,52|13,55|7,40|55,92|523,65|<br>';
