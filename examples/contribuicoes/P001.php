<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\P001;

$std = new stdClass();
$std->IND_MOV = '1';

try {
$p001 = new P001($std);
echo "{$p001}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|P001|1|<br>';
