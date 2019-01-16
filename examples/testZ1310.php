<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\Z1310;

$std = new stdClass();
$std->NUM_TANQUE = '123';
$std->ESTQ_ABERT = 12.902;
$std->VOL_ENTR = 4.482;
$std->VOL_DISP = 17.384;
$std->VOL_SAIDAS = 9.673;
$std->ESTQ_ESCR = 7.711;
$std->VAL_AJ_PERDA = 1.082;
$std->VAL_AJ_GANHO = 8.903;
$std->FECH_FISICO = 12.309;

try {
    $b1 = new Z1310($std);
    echo "{$b1}".'<br>';
    echo '|1310|123|12.902|4.482|17.384|9.673|7.711|1.082|8.903|12.309|';
} catch (\Exception $e) {
    echo $e->getMessage();
}