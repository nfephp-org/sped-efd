<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\Z1710;

$std = new stdClass();
$std->NUM_DOC_INI = 12322385075;
$std->NUM_DOC_FIN = 23819903275;

try {
    $b1 = new Z1710($std);
    echo "{$b1}".'<br>';
    echo '|1710|12322385075|23819903275|';
} catch (\Exception $e) {
    echo $e->getMessage();
}