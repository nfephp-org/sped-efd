<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\D001;

$std = new stdClass();
$std->IND_MOV = '1';

try {
$d001 = new D001($std);
echo "{$d001}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|D001|1|<br>';
