<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\Z0001;

$std = new stdClass();
$std->IND_MOV = '8';

try {
$z0001 = new Z0001($std);
echo "{$z0001}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|Z0001|8|<br>';
