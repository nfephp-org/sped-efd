<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\C001;

$std = new stdClass();
$std->IND_MOV = '1';
try {
$c001 = new C001($std);
echo "{$c001}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|C001|1|<br>';
