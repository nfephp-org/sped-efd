<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\Z0200;

$std = new stdClass();
$std->COD_ITEM = '34438343';
$std->DESCR_ITEM = 'JMV3P4';
$std->COD_BARRA = 'JP';
$std->COD_ANT_ITEM = 'R4345';
$std->UNID_INV = 'LPFC1S';
$std->TIPO_ITEM = '02';
$std->COD_NCM = 'CSD20WD8';
$std->EX_IPI = '4TX';
$std->COD_GEN = '23';
$std->COD_LST = '2546';
$std->ALIQ_ICMS = 205.1;

try {
$z0200 = new Z0200($std);
echo "{$z0200}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|0200|34438343|JMV3P4|JP|R4345|LPFC1S|02|CSD20WD8|4TX|23|2546|205,10|<br>';
