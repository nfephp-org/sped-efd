<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\Z0120;

$std = new stdClass();
$std->REG = 'ZO3H';
$std->MES_REFER = 'J6753J';
$std->INF_COMP = 'Informacao complementar';

try {
$z0120 = new Z0120($std);
echo "{$z0120}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|Z0120|ZO3H|J6753J|Informacao complementar|<br>';
