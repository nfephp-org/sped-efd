<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\M400;

$std = new stdClass();
$std->CST_PIS = '99';
$std->VL_TOT_REC = 22.91;
$std->COD_CTA = '8006298014577606';
$std->DESC_COMPL = 'RQM3RI';

try {
$m400 = new M400($std);
echo "{$m400}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|M400|99|22,91|8006298014577606|RQM3RI|
<br>';
