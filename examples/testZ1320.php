<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\Z1320;

$std = new stdClass();
$std->NUM_BICO = 12342;
$std->NR_INTERV = 3224918274056;
$std->MOT_INTERV = 'Motivo da Intervenção';
$std->NOM_INTERV = 'Nome do Interventor';
$std->CNPJ_INTERV = 12345678901234;
$std->CPF_INTERV = 12345678901;
$std->VAL_FECHA = 3.098;
$std->VAL_ABERT = 2.120;
$std->VOL_AFERI = 0.091;
$std->VOL_VENDAS = 0.887;

try {
    $b1 = new Z1320($std);
    echo "{$b1}".'<br>';
    echo '|1320|12342|3224918274056|Motivo da Intervenção|Nome do Interventor|12345678901234|12345678901|3.098|2.120|0.091|0.887|';
} catch (\Exception $e) {
    echo $e->getMessage();
}