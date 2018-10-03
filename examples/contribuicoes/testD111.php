<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\D111;

$std = new stdClass();
$std->NUM_PROC = 'GPHOSQL78QJV5G38K8JV';
$std->IND_PROC = '1';

try {
$d111 = new D111($std);
echo "{$d111}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|D111|GPHOSQL78QJV5G38K8JV|1|
<br>';
