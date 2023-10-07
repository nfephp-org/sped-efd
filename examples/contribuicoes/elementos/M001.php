<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\M001;

$std = new stdClass();
$std->IND_MOV = '0';

try {
$m001 = new M001($std);
echo "{$m001}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|M001|0|
<br>';
