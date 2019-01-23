<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\C198;

$std = new stdClass();
$std->NUM_PROC = '9546444543';
$std->IND_PROC = '1';

try {
$c198 = new C198($std);
echo "{$c198}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|C198|9546444543|1|<br>';
