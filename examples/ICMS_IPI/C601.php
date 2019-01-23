<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C601;

$std = new stdClass();
$std->NUM_DOC_CANC = '18349';

try {
$c601 = new C601($std);
echo "{$c601}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|C601|18349|<br>';
