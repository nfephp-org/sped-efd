<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C405;

$std = new stdClass();
$std->DT_DOC = '27092018';
$std->CRO = '618';
$std->CRZ = '102689';
$std->NUM_COO_FIN = '646330879';
$std->GT_FIN = 214.3;
$std->VL_BRT = 20.86;

try {
    $c405 = new C405($std);
    echo "{$c405}".'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '|C405|<br>';
