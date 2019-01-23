<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C110;

$std = new stdClass();
$std->COD_INF = '123456';
$std->TXT_COMPL = 'Texto complementar';
try {
    $b0 = new C110($std);
    echo "{$b0}".'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '|C110|123456|Texto complementar|<br>';
