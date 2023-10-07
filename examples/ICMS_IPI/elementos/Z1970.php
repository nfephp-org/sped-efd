<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\Z1970;

$std = new stdClass();
$std->IND_AP = 12;
$std->G3_01 = 10.00;
$std->G3_02 = 12.00;
$std->G3_03 = 30.00;
$std->G3_04 = 50.00;
$std->G3_05 = 6.00;
$std->G3_06 = 130.00;
$std->G3_07 = 40.00;
$std->G3_T = 86.00;
$std->G3_08= 14.00;
$std->G3_09 = 145.00;

try {
    $b1 = new Z1970($std);
    echo "{$b1}".'<br>';
    echo '|1970|12|10.00|12.00|30.00|50.00|6.00|130.00|40.00|86.00|14.00|145.00|';
} catch (\Exception $e) {
    echo $e->getMessage();
}
