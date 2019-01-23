<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\Z1925;

$std = new stdClass();
$std->COD_INF_ADIC = '12345678';
$std->VL_INF_ADIC = 12.00;
$std->DESCR_COMPL_AJ = 'Descrição complementar do ajuste';

try {
    $b1 = new Z1925($std);
    echo "{$b1}".'<br>';
    echo '|1925|12345678|12.00|Descrição complementar do ajuste|';
} catch (\Exception $e) {
    echo $e->getMessage();
}