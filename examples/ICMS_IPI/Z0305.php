<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use \stdClass;
use NFePHP\EFD\Elements\ICMSIPI\Z0305;

$std = new stdClass();
$std->COD_COMB = '320102003';


try {
    $z0305 = new Z0305($std);
    echo "{$z0305}".'<br>';
    echo '|0305|<br>';
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}

