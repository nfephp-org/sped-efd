<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\D209;

$std = new stdClass();
$std->NUM_PROC = 'TJF62ACR4A2JDFN3QMNX';
$std->IND_PROC = '1';

try {
$d209 = new D209($std);
echo "{$d209}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|D209|TJF62ACR4A2JDFN3QMNX|1|<br>';
