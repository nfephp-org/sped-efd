<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\Z1601;

$std = new stdClass();
$std->COD_PART_IP = '1';
$std->COD_PART_IT = null;
$std->TOT_VS = 100;
$std->TOT_ISS = 120;
$std->TOT_OUTROS = 20;

try {
    $b1 = new Z1601($std);
    echo "{$b1}" . '<br>';
    echo '|1601|1||100,00|120,00|20,00|';
} catch (\Exception $e) {
    echo $e->getMessage();
}
