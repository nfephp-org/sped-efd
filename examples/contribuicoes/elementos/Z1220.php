<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\Z1220;

$std = new stdClass();
$std->PER_APU_CRED = '15616';
$std->ORIG_CRED = '1';
$std->COD_CRED = '850';
$std->VL_CRED = 76.60;

try {
$z1220 = new Z1220($std);
echo "{$z1220}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|1220|15616|1|850|76,60|<br>';
