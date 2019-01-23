<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\P110;

$std = new stdClass();
$std->NUM_CAMPO = 'AX';
$std->COD_DET = '08837471';
$std->DET_VALOR = 597.2;
$std->INF_COMPL = '3B2Q3S';

try {
$p110 = new P110($std);
echo "{$p110}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|P110|AX|08837471|597,20|3B2Q3S|<br>';
