<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C174;

$std = new stdClass();
$std->IND_ARM = '1';
$std->NUM_ARM = '3324';
$std->DESCR_COMPL = 'Descricao teste';

try {
    $c174 = new C174($std);
    echo "{$c174}".'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '|C174|1|3324|Descricao teste|<br>';
