<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C105;

$std = new stdClass();
$std->OPER = '1';
$std->UF = 'RS';
try {
    $b0 = new C105($std);
    echo "{$b0}".'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '|C105|1|RS|<br>';
