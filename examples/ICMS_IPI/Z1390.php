<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\Z1390;

$std = new stdClass();
$std->COD_PROD = '02';

try {
    $b1 = new Z1390($std);
    echo "{$b1}".'<br>';
    echo '|1390|02|';
} catch (\Exception $e) {
    echo $e->getMessage();
}