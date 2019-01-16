<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use \stdClass;
use NFePHP\EFD\Elements\ICMSIPI\K001;

$std = new stdClass();
$std->ind_mov = 1;

try {
    $k1 = new K001($std);
    echo "{$k1}".'<br>';
    echo '|K001|1|';
} catch (\Exception $e) {
    echo $e->getMessage();
}


