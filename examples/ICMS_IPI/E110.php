<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\E110;

$std = new stdClass();
$std->VL_TOT_DEBITOS = 273.67;
$std->VL_AJ_DEBITOS = 3737.90;
$std->VL_TOT_AJ_DEBITOS = 234.90;
$std->VL_ESTORNOS_CRED = 8623;
$std->VL_TOT_CREDITOS = 23.40;
$std->VL_AJ_CREDITOS = 48;
$std->VL_TOT_AJ_CREDITOS = 23418;
$std->VL_ESTORNOS_DEB = 10.65;
$std->VL_SLD_CREDOR_ANT = 193;
$std->VL_SLD_APURADO = 2347.90;
$std->VL_TOT_DED = 5837;
$std->VL_ICMS_RECOLHER = 0;
$std->VL_SLD_CREDOR_TRANSPORTAR = 16660.58;
$std->DEB_ESP = 83.54;

try {
    $b0 = new E110($std);
    echo "{$b0}".'<br>';
    echo '|E110|273.67|3737.90|234.90|8623|23.40|48|23418|10.65|193|2347.90|5837|0|16660.58|83.54|<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}
