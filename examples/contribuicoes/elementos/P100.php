<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\P100;

$std = new stdClass();
$std->DT_INI = '04102018';
$std->DT_FIN = '04102018';
$std->VL_REC_TOT_EST = 40.76;
$std->COD_ATIV_ECON = '30348396';
$std->VL_REC_ATIV_ESTAB = 14.96;
$std->VL_EXC = 95.88;
$std->VL_BC_CONT = 57.21;
$std->ALIQ_CONT = 199.6;
$std->VL_CONT_APU = 97.30;
$std->COD_CTA = '3030059236664995';
$std->INFO_COMPL = 'ZQDQZV';
$std->NUM_CAMPO = '93';
$std->COD_DET = '02580321';
$std->DET_VALOR = 64.9;
$std->INF_COMPL = 'ZBWJCP';

try {
$p100 = new P100($std);
echo "{$p100}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|P100|04102018|04102018|40,76|30348396|14,96|95,88|57,21|199,6000|97,30|3030059236664995|ZQDQZV|93|02580321|64,90|ZBWJCP|<br>';
