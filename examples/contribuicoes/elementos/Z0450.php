<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\Z0450;

$std = new stdClass();
$std->COD_INF = '7T0474';
$std->TXT = 'Texto';

try {
$z0450 = new Z0450($std);
echo "{$z0450}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|0450|7T0474|Texto|<br>';
