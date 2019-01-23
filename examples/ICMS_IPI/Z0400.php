<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use \stdClass;
use NFePHP\EFD\Elements\ICMSIPI\Z0400;

$std = new stdClass();



try {
    $z0400 = new Z0400($std);
    echo "{$z0400}".'<br>';
    echo '|0400|<br>';
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}

