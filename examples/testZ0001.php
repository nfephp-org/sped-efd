<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use \stdClass;
use NFePHP\EFD\Elements\ICMSIPI\Z0001;

$std = new stdClass();
$std->ind_mov = 1; 


try {
    $b1 = new Z0001($std);
    echo "{$b1}".'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '|0001|1|';
