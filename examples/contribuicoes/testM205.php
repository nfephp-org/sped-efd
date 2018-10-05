<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\M205;

$std = new stdClass();
$std->NUM_CAMPO = '0A';
$std->COD_REC = '132568';
$std->VL_DEBITO = 28.65;

try {
$m205 = new M205($std);
echo "{$m205}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|M205|0A|132568|28,65|<br>';
