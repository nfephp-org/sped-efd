<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\Z1600;

$std = new stdClass();
$std->COD_PART = '123405943768903938';
$std->TOT_CREDITO = 120.00;
$std->TOT_DEBITO = 110.00;

try {
    $b1 = new Z1600($std);
    echo "{$b1}".'<br>';
    echo '|1600|123405943768903938|120.00|110.00|';
} catch (\Exception $e) {
    echo $e->getMessage();
}