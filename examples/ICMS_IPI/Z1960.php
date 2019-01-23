<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\Z1960;

$std = new stdClass();
$std->IND_AP = 12;
$std->G1_01 = 50.00;
$std->G1_02 = 70.00;
$std->G1_03 = 26.00;
$std->G1_04 = 110.00;
$std->G1_05 = 80.00;
$std->G1_06 = 15.00;
$std->G1_07 = 56.00;
$std->G1_08 = 4.00;
$std->G1_09 = 23.00;
$std->G1_10 = 152.00;
$std->G1_11 = 5.00;

try {
    $b1 = new Z1960($std);
    echo "{$b1}".'<br>';
    echo '|1960|12|50.00|70.00|26.00|110.00|80.00|15.00|56.00|4.00|23.00|152.00|5.0|';
} catch (\Exception $e) {
    echo $e->getMessage();
}