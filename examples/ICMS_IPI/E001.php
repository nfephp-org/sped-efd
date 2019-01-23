<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\E001;

$std = new stdClass();
$std->IND_MOV = '0';

try {
    $b0 = new E001($std);
    echo "{$b0}".'<br>';
    echo '|E001|0|<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

