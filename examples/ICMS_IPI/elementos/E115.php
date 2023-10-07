<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\E115;

$std = new stdClass();
$std->COD_INF_ADIC = '12345678';
$std->VL_INF_ADIC = 1800;
$std->DESCR_COMPL_AJ = 'Descrição complementar do ajuste';

try {
    $b0 = new E115($std);
    echo "{$b0}".'<br>';
    echo '|E115|12345678|1800|Descrição complementar do ajuste|<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}
