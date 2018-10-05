<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\Z0600;

$std = new stdClass();
$std->DT_ALT = '01102018';
$std->COD_CCUS = '44543544';
$std->CCUS = '3325353';

try {
$z0600 = new Z0600($std);
echo "{$z0600}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|0600|01102018|44543544|3325353|<br>';
