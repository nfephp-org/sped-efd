<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C410;

$std = new stdClass();
$std->VL_PIS = 59.96;
$std->VL_COFINS = 80.54;

try {
    $c410 = new C410($std);
    echo "{$c410}".'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '|C410|59,96|80,54|<br>';
