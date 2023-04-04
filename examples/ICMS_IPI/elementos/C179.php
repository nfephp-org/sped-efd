<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C179;

$std = new stdClass();
$std->BC_ST_ORIG_DEST = 451.9;
$std->ICMS_ST_REP = 145.6;
$std->ICMS_ST_COMPL = 283.1;
$std->BC_RET = 919.8;
$std->ICMS_RET = 12.43;

try {
    $c179 = new C179($std);
    echo "{$c179}".'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '|C179|451,90|145,60|283,10|919,80|12.43|<br>';
