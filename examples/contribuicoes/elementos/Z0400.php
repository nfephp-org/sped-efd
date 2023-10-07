<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\Z0400;

$std = new stdClass();
$std->COD_NAT = '2223275';
$std->DESCR_NAT = 'Descricao';

try {
$z0400 = new Z0400($std);
echo "{$z0400}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|0400|2223275|Descricao|<br>';
