<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C300;

$std = new stdClass();
$std->COD_MOD = 'XQ';
$std->SER = 'G9JK';
$std->SUB = '204';
$std->NUM_DOC_INI = '528669';
$std->NUM_DOC_FIN = '93676';
$std->DT_DOC = '27092018';
$std->VL_DOC = 90.58;
$std->VL_PIS = 89.76;
$std->VL_COFINS = 57.12;
$std->COD_CTA = 'RC';

try {
    $c300 = new C300($std);
    echo "{$c300}".'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '|C300|XQ|G9JK|204|528669|93676|27092018|90,58|89,76|57,12|RC|<br>';
