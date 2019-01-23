<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use \stdClass;
use NFePHP\EFD\Elements\ICMSIPI\Z0450;

$std = new stdClass();



try {
    $z0450 = new Z0450($std);
    echo "{$z0450}".'<br>';
    echo '|0450|<br>';
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}

