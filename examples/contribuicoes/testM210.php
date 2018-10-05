<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\M210;

$std = new stdClass();
$std->COD_CONT = '68';
$std->VL_REC_BRT = 8.65;
$std->VL_BC_CONT = 99.75;
$std->ALIQ_PIS = 347.3;
$std->QUANT_BC_PIS = 970.7;
$std->ALIQ_PIS_QUANT = 457.5;
$std->VL_CONT_APUR = 70.80;
$std->VL_AJUS_ACRES = 67.90;
$std->VL_AJUS_REDUC = 23.60;
$std->VL_CONT_DIFER = 91.99;
$std->VL_CONT_DIFER_ANT = 71.98;
$std->VL_CONT_PER = 62.81;

try {
$m210 = new M210($std);
echo "{$m210}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|M210|68|8,65|99,75|347,3000|970,700|457,5000|70,80|67,90|23,60|91,99|71,98|62,81|<br>';
