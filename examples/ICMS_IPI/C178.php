<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C178;

$std = new stdClass();
$std->CL_ENQ = 'AS332';
$std->VL_UNID = 80.27;
$std->QUANT_PAD = 840;

try {
    $c178 = new C178($std);
    echo "{$c178}".'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '|C178|AS332|80,27|840,000|<br>';
