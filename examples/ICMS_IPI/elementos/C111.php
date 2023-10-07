<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C111;

$std = new stdClass();
$std->NUM_PROC = '123456789012345';
$std->IND_PROC = '2';
try {
    $b0 = new C111($std);
    echo "{$b0}".'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '|C111|123456789012345|2|<br>';
