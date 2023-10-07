<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\C111;

$std = new stdClass();
$std->NUM_PROC = '94852098793';
$std->IND_PROC = '1';

try {
$c111 = new C111($std);
echo "{$c111}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|C111|94852098793|1|<br>';
