<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use \stdClass;
use NFePHP\EFD\Elements\ICMSIPI\Z0220;

$std = new stdClass();
$std->COD_COMB = '320102003';


try {
    $z0220 = new Z0220($std);
    echo "{$z0220}".'<br>';
    echo '|0220|<br>';
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}

