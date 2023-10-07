<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\Z1910;

$std = new stdClass();
$std->DT_INI = 10102017;
$std->DT_FIN = 11112017;

try {
    $b1 = new Z1910($std);
    echo "{$b1}".'<br>';
    echo '|1910|10102017|11112017|';
} catch (\Exception $e) {
    echo $e->getMessage();
}
