<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\C188;

$std = new stdClass();
$std->NUM_PROC = '79953784';
$std->IND_PROC = '1';

try {
$c188 = new C188($std);
echo "{$c188}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|C188|79953784|1|<br>';
