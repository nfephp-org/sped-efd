<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C114;

$std = new stdClass();
$std->COD_MOD = '02';
$std->ECF_FAB = '123456712345671234567';
$std->ECF_CX = 123;
$std->NUM_DOC = '123456789';
$std->DT_DOC = '22092018';
try {
    $c114 = new C114($std);
    echo "{$c114}".'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '|C114|02|123456712345671234567|123|123456789|22092018|<br>';
