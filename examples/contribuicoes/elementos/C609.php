<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\C609;

$std = new stdClass();
$std->NUM_PROC = '934543532453';
$std->IND_PROC = '1';

try {
$c609 = new C609($std);
echo "{$c609}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|C609|934543532453|1|<br>';
