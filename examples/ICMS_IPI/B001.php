<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\B001;

$std = new stdClass();
$std->IND_DAD = '1';

try {
    $b0 = new B001($std);
    echo "{$b0}".'<br>';
    echo '|B001|1|<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}