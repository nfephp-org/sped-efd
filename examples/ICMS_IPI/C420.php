<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C420;

$std = new stdClass();
$std->COD_TOT_PAR = '3324';
$std->VLR_ACUM_TOT = 692.9;
$std->NR_TOT = '65';
$std->DESCR_NR_TOT = 'Desc Teste';

try {
    $c420 = new C420($std);
    echo "{$c420}".'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '|C420|3324|692,90|65|Desc Teste|<br>';
