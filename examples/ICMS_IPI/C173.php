<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C173;

$std = new stdClass();
$std->LOTE_MED = '53V42Z';
$std->QTD_ITEM = 954.4;
$std->DT_FAB = '26092018';
$std->DT_VAL = '26092018';
$std->IND_MED = '2';
$std->TP_PROD = '1';
$std->VL_TAB_MAX = 38.61;

try {
    $c173 = new C173($std);
    echo "{$c173}".'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '|C173|53V42Z|954,400|26092018|26092018|2|1|38,61|<br>';
