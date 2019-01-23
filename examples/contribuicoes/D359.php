<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\D359;

$std = new stdClass();
$std->NUM_PROC = 'LE4JPXURR7D9P314OUFX';
$std->IND_PROC = '1';

try {
$d359 = new D359($std);
echo "{$d359}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|D359|LE4JPXURR7D9P314OUFX|1|<br>';
