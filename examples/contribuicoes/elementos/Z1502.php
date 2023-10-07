<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\Z1502;

$std = new stdClass();
$std->VL_CRED_COFINS_TRIB_MI = 39.19;
$std->VL_CRED_COFINS_NT_MI = 34.83;
$std->VL_CRED_COFINS_EXP = 60.85;

try {
$z1502 = new Z1502($std);
echo "{$z1502}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|1502|39,19|34,83|60,85|<br>';
