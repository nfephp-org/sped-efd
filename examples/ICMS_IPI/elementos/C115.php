<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C115;

$std = new stdClass();
$std->IND_CARGA = 1;
$std->CNPJ_COL = '66497583000116';
$std->IE_COL = '4650189685';
$std->CPF_COL = '39842517004';
$std->COD_MUN_COL = '4219507';
$std->CNPJ_ENTG = '78393333000115';
$std->IE_ENTG = '0559382612';
$std->COD_MUN_ENTG = '3100104';
try {
    $c115 = new C115($std);
    echo "{$c115}".'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '|C115|1|66497583000116|4650189685|39842517004|4219507|78393333000115|0559382612||3100104|<br>';
