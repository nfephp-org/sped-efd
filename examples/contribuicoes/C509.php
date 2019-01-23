<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\C509;

$std = new stdClass();
$std->NUM_PROC = '932479273939';
$std->IND_PROC = '1';

try {
$c509 = new C509($std);
echo "{$c509}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|C509|932479273939|1|<br>';
