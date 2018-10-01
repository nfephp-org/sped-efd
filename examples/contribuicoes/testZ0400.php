<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\Z0400;

$std = new stdClass();
$std->COD_NAT = 'TVJVC327DZ';
$std->DESCR_NAT = 'IBY143';

try {
$z0400 = new Z0400($std);
echo "{$z0400}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|Z0400|<br>';