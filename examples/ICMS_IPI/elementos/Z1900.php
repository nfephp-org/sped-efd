<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\Z1900;

$std = new stdClass();
$std->IND_APUR_ICMS = '5';
$std->DESCR_COMPL_OUT_APUR = 'Descrição complementar de Outra Apuração do ICMS';

try {
    $b1 = new Z1900($std);
    echo "{$b1}".'<br>';
    echo '|1900|5|Descrição complementar de Outra Apuração do ICMS|';
} catch (\Exception $e) {
    echo $e->getMessage();
}
