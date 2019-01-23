<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\M605;

$std = new stdClass();
$std->NUM_CAMPO = '3T';
$std->COD_REC = '589323';
$std->VL_DEBITO = 34.6;

try {
$m605 = new M605($std);
echo "{$m605}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|M605|3T|589323|34,60|
<br>';
