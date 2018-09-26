<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C140;

$std = new stdClass();
$std->IND_EMIT = '0';
$std->IND_TIT = '02';
$std->DESC_TIT = 'Descricao Complementar';
$std->NUM_TIT = '332453';
$std->VL_IRRF = 1.23;
$std->QTD_PARC = 2;
$std->VL_TIT = 120.43;
try {
    $c140 = new C140($std);
    echo "{$c140}".'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '|C140|0|02|Descricao Complementar|332453|2|120,43|<br>';
