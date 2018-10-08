<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\Z1300;

$std = new stdClass();
$std->COD_ITEM = '12039327432658932701237269820167832432983248';
$std->DT_FECH = 12122017;
$std->ESTQ_ABERT = 12.987;
$std->VOL_ENTR = 10.000;
$std->VOL_DISP = 22.987;
$std->VOL_SAIDAS = 10.092;
$std->ESTQ_ESCR = 12.895;
$std->VAL_AJ_PERDA = 9.007;
$std->VAL_AJ_GANHO = 1.080;
$std->FECH_FISICO = 2.010;

try {
    $b1 = new Z1300($std);
    echo "{$b1}".'<br>';
    echo '|1300|12039327432658932701237269820167832432983248|12122017|12.987|10.000|22.987|10.092|12.895|9.007|1.080|2.010|';
} catch (\Exception $e) {
    echo $e->getMessage();
}