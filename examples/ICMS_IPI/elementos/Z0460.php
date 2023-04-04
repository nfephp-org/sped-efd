<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use \stdClass;
use NFePHP\EFD\Elements\ICMSIPI\Z0460;

$std = new stdClass();



try {
    $z0460 = new Z0460($std);
    echo "{$z0460}".'<br>';
    echo '|0460|<br>';
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}

