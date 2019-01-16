<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C310;

$std = new stdClass();
$std->NUM_DOC_CANC = '5491';

try {
    $c310 = new C310($std);
    echo "{$c310}".'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '|C310|5491|<br>';
