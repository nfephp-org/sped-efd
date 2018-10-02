<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\B420;

$std = new stdClass();
$std->VL_CONT = 1200.00;
$std->VL_BC_ISS = 780.00;
$std->ALIQ_ISS = 2;
$std->VL_ISNT_ISS = 300.00;
$std->VL_ISS = 123.34;
$std->COD_SERV = 'Item da lista de serviços, conforme Tabela 4.6.3.';

try {
    $b0 = new B420($std);
    echo "{$b0}".'<br>';
    echo '|B420|1200.00|780.00|2|300.00|123.34|Item da lista de serviços, conforme Tabela 4.6.3.|<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}