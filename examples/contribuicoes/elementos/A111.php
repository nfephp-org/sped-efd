<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\A111;

$std = new stdClass();
$std->NUM_PROC = '38384928374';
$std->IND_PROC = '1';

try {
$a111 = new A111($std);
echo "{$a111}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|A111|38384928374|1|<br>';
