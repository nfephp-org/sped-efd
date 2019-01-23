<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\Z1980;

$std = new stdClass();
$std->IND_AP = 12;
$std->G4_01 = 50.00;
$std->G4_02 = 59.00;
$std->G4_03 = 23.00;
$std->G4_04 = 12.00;
$std->G4_05 = 64.00;
$std->G4_06 = 98.00;
$std->G4_07 = 24.00;
$std->G4_08 = 6.00;
$std->G4_09 = 53.00;
$std->G4_10 = 32.00;
$std->G4_11 = 67.00;
$std->G4_12 = 74.00;

try {
    $b1 = new Z1980($std);
    echo "{$b1}".'<br>';
    echo '|1980|12|50.00|59.00|23.00|12.00|64.00|98.00|24.00|6.00|53.00|32.00|67.00|74.00|';
} catch (\Exception $e) {
    echo $e->getMessage();
}