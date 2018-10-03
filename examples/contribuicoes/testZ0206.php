<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\Z0206;

$std = new stdClass();
$std->COD_COMB = '23';

try {
$z0206 = new Z0206($std);
echo "{$z0206}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|Z0206|23|<br>';
