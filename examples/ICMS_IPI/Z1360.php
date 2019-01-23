<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\Z1360;

$std = new stdClass();
$std->NUM_LACRE = '12345678901234567890';
$std->DT_APLICACAO = 28082018;

try {
    $b1 = new Z1360($std);
    echo "{$b1}".'<br>';
    echo '|1360|12345678901234567890|28082018|';
} catch (\Exception $e) {
    echo $e->getMessage();
}