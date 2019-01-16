<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use \stdClass;
use NFePHP\EFD\Elements\ICMSIPI\H020;

$std = new stdClass();
$std->CST_ICMS = '123';
$std->BC_ICMS = 36207.885;
$std->VL_ICMS = 6517.4193;

try {
    $b0 = new H020($std);
    echo "{$b0}".'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '|H020|123|36207,89|6517,42|<br>';
