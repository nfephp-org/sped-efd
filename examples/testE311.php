<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\E311;

$std = new stdClass();
$std->COD_AJ_APUR = 'XX209999';
$std->DESCR_COMPL_AJ = 'Descrição complementar do ajuste da apuração';
$std->VL_AJ_APUR = 9.75;

try {
    $b0 = new E311($std);
    echo "{$b0}".'<br>';
    echo '|E311|XX209999|Descrição complementar do ajuste da apuração|9.75|<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}
