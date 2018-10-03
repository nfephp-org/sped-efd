<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\C499;

$std = new stdClass();
$std->NUM_PROC = 'Q8UHQTF6R58X1H9S3YYM';
$std->IND_PROC = '1';

try {
$c499 = new C499($std);
echo "{$c499}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|C499|Q8UHQTF6R58X1H9S3YYM|1|<br>';
