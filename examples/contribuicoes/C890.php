<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\C890;

$std = new stdClass();
$std->NUM_PROC = 'B4SDJTI5JW3YKSW9XGKQ';
$std->IND_PROC = '1';

try {
$c890 = new C890($std);
echo "{$c890}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|C890|B4SDJTI5JW3YKSW9XGKQ|1|<br>';
