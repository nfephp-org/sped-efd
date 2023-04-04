<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\D309;

$std = new stdClass();
$std->NUM_PROC = '1TRMBASRCFCHT0WNP8O8';
$std->IND_PROC = '3';

try {
$d309 = new D309($std);
echo "{$d309}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|D309|1TRMBASRCFCHT0WNP8O8|3|<br>';
