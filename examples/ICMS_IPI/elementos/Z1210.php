<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\Z1210;

$std = new stdClass();
$std->TIPO_UTIL = '1234';
$std->NR_DOC = '231092472389';
$std->VL_CRED_UTIL = 200.00;
$std->CHV_DOCE = '12039327432658932701237269820167832432983248';

try {
    $b1 = new Z1210($std);
    echo "{$b1}".'<br>';
    echo '|1210|1234|231092472389|200.00|12039327432658932701237269820167832432983248|';
} catch (\Exception $e) {
    echo $e->getMessage();
}
