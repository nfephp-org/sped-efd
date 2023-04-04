<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C350;

$std = new stdClass();
$std->SER = 'IOS';
$std->SUB_SER = 'R5D';
$std->NUM_DOC = '649009';
$std->DT_DOC = '27092018';
$std->CNPJ_CPF = '40814340000170';
$std->VL_MERC = 95.23;
$std->VL_DOC = 15.98;
$std->VL_DESC = 90.81;
$std->VL_PIS = 35.22;
$std->VL_COFINS = 74.37;

try {
    $c350 = new C350($std);
    echo "{$c350}".'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '|C350|IOS|R5D|649009|27092018|40814340000170|95,23|15,98|90,81|35,22|74,37|<br>';
