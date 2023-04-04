<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\E100;

$std = new stdClass();
$std->DT_INI = '25092018';
$std->DT_FIN = '25102018';

try {
    $b0 = new E100($std);
    echo "{$b0}".'<br>';
    echo '|E100|25092018|25102018|<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

