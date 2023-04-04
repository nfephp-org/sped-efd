<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\E220;

$std = new stdClass();
$std->COD_AJ_APUR = '12345678';
$std->DESCR_COMPL_AJ = 'Descrição complementar do ajuste da apuração';
$std->VL_AJ_APUR = 19.98;

try {
    $b0 = new E220($std);
    echo "{$b0}".'<br>';
    echo '|E220|12345678|Descrição complementar do ajuste da apuração|19.98|<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}
