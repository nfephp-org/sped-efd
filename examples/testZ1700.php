<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\Z1700;

$std = new stdClass();
$std->COD_DISP = '01';
$std->COD_MOD = '18';
$std->SER = '1234';
$std->SUB = '123';
$std->NUM_DOC_INI = 12380417236;
$std->NUM_DOC_FIN = 80319712783;
$std->NUM_AUT = '6531403573029432734120734';

try {
    $b1 = new Z1700($std);
    echo "{$b1}".'<br>';
    echo '|1700|01|18|1234|123|12380417236|80319712783|6531403573029432734120734|';
} catch (\Exception $e) {
    echo $e->getMessage();
}