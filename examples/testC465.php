<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C465;

$std = new stdClass();
$std->CHV_CFE = '43171207364617000135550000000120141000120146';
$std->NUM_CCF = '96222321';

try {
    $c465 = new C465($std);
    echo "{$c465}".'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '|C465|43171207364617000135550000000120141000120146|96222321|<br>';
