<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\D509;

$std = new stdClass();
$std->NUM_PROC = 'PXWWU0N53EAA0GKSK5GW';
$std->IND_PROC = '1';

try {
$d509 = new D509($std);
echo "{$d509}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|D509|PXWWU0N53EAA0GKSK5GW|1|<br>';
