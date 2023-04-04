<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\Z1001;

$std = new stdClass();
$std->IND_MOV = '1';

try {
$z1001 = new Z1001($std);
echo "{$z1001}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|1001|1|<br>';
