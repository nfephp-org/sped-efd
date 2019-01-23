<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\Z1001;

$std = new stdClass();
$std->IND_MOV = 1;

try {
    $b1 = new Z1001($std);
    echo "{$b1}".'<br>';
    echo '|1001|1|';
} catch (\Exception $e) {
    echo $e->getMessage();
}

