<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use \stdClass;
use NFePHP\EFD\Elements\ICMSIPI\Z0300;

$std = new stdClass();
$std->COD_COMB = '320102003';


try {
    $z0300 = new Z0300($std);
    echo "{$z0300}".'<br>';
    echo '|0300|<br>';
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}

