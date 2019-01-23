<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\Z1921;

$std = new stdClass();
$std->COD_AJ_APUR = '12345678';
$std->DESCR_COMPL_AJ = 'Descrição complementar do ajuste da apuração.';
$std->VL_AJ_APUR = 450.00;

try {
    $b1 = new Z1921($std);
    echo "{$b1}".'<br>';
    echo '|1921|12345678|Descrição complementar do ajuste da apuração.|450.00|';
} catch (\Exception $e) {
    echo $e->getMessage();
}