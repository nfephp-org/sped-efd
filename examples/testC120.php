<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C120;

$std = new stdClass();
$std->COD_DOC_IMP = '0';
$std->NUM_DOC_IMP = '123456789012';
$std->PIS_IMP = 52.50;
$std->COFINS_IMP = 21.32;
$std->NUM_ACDRAW = '1231231231';
try {
    $c120 = new C120($std);
    echo "{$c120}".'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '|C120|0|123456789012|52,50|21,32|1231231231|<br>';
