<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\Z1300;

$std = new stdClass();
$std->IND_NAT_RET = '1';
$std->PR_REC_RET = '352010';
$std->VL_RET_APU = 443.79;
$std->VL_RET_DED = 71.66;
$std->VL_RET_PER = 63.86;
$std->VL_RET_DCOMP = 10.79;
$std->SLD_RET = 297.48;

try {
$z1300 = new Z1300($std);
echo "{$z1300}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|1300|1|352010|443,79|71,66|63,86|10,79|297,48|<br>';
