<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C141;

$std = new stdClass();
$std->NUM_PARC = 3;
$std->DT_VCTO = '26092018';
$std->VL_PARC = 250.2;

try {
    $c141 = new C141($std);
    echo "{$c141}".'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '|C141|3|26092018|250,20|<br>';
