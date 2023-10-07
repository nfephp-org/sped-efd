<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use \stdClass;
use NFePHP\EFD\Elements\ICMSIPI\Z0206;

$std = new stdClass();
$std->COD_COMB = '320102003';


try {
    $z0206 = new Z0206($std);
    echo "{$z0206}".'<br>';
    echo '|0206|320102003|<br>';
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}

