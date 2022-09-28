<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use \stdClass;
use NFePHP\EFD\Elements\ICMSIPI\K010;

$std = new stdClass();
$std->ind_tp_leiaute = 0;

try {
    $k10 = new K010($std);
    echo "{$k10}".'<br>';
    echo '|K010|0|';
} catch (\Exception $e) {
    echo $e->getMessage();
}


