<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\Z1975;

$std = new stdClass();
$std->ALIQ_IMP_BASE = 6.00;
$std->G3_10 = 100.00;
$std->G3_11 = 120.00;
$std->G3_12 = 65.00;

try {
    $b1 = new Z1975($std);
    echo "{$b1}".'<br>';
    echo '|1975|6.00|100.00|120.00|65.00|';
} catch (\Exception $e) {
    echo $e->getMessage();
}