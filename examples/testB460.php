<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\B460;

$std = new stdClass();
$std->IND_DED = '2';
$std->VL_DED = 800.00;
$std->NUM_PROC = '234723';
$std->IND_PROC = '1';
$std->PROC = 'Descrição do processo que embasou o lançamento';
$std->COD_INF_OBS = '3294083950729363702901';
$std->IND_OBR = '0';

try {
    $b0 = new B460($std);
    echo "{$b0}".'<br>';
    echo '|B460|2|800.00|234723|1|Descrição do processo que embasou o lançamento|3294083950729363702901|0|<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}