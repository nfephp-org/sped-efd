<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use \stdClass;
use NFePHP\EFD\Elements\ICMSIPI\Z0500;

$std = new stdClass();



try {
    $z0500 = new Z0500($std);
    echo "{$z0500}".'<br>';
    echo '|0500|<br>';
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}

