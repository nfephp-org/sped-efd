<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use \stdClass;
use NFePHP\EFD\Elements\ICMSIPI\Z0600;

$std = new stdClass();



try {
    $z0600 = new Z0600($std);
    echo "{$z0600}".'<br>';
    echo '|0600|<br>';
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}

