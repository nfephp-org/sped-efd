<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use \stdClass;
use NFePHP\EFD\Elements\ICMSIPI\Z0190;

$std = new stdClass();
$std->UNID = 'mts';
$std->DESCR = 'mts';

try {
    $z0190 = new Z0190($std);
    echo "{$z0190}".'<br>';
    echo '|0190|m|metro|<br>';
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}

