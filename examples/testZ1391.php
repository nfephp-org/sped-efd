<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\Z1391;

$std = new stdClass();
$std->DT_REGISTRO = '01012018';
$std->QTD_MOID = 100.00;
$std->ESTQ_INI = 200.00;
$std->QTD_PRODUZ = 300.00;
$std->ENT_ANID_HID = 400.00;
$std->OUTR_ENTR = 50.00;
$std->PERDA = 80.00;
$std->CONS = 90.00;
$std->SAI_ANI_HID = 150.00;
$std->SAIDAS = 670.00;
$std->ESTQ_FIN = 99.99;
$std->ESTQ_INI_MEL = 100.00;
$std->PROD_DIA_MEL = 400.00;
$std->UTIL_MEL = 26.00;
$std->PROD_ALC_MEL = 45.00;
$std->OBS = 'Observações';

try {
    $b1 = new Z1391($std);
    echo "{$b1}".'<br>';
    echo '|1391|01012018|100.00|200.00|300.00|400.00|50.00|80.00|90.00|150.00|670.00|99.99|100.00|400.00|26.00|45.00|Observações|';
} catch (\Exception $e) {
    echo $e->getMessage();
}