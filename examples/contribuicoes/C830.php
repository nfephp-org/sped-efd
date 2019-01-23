<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\C830;

$std = new stdClass();
$std->NUM_PROC = '0KMC1WP5ULFU4E1KDVQM';
$std->IND_PROC = '1';

try {
$c830 = new C830($std);
echo "{$c830}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|C830|0KMC1WP5ULFU4E1KDVQM|1|<br>';
