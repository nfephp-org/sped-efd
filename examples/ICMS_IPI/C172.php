<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C172;

$std = new stdClass();
$std->VL_BC_ISSQN = 7.74;
$std->ALIQ_ISSQN = 10.32;
$std->VL_ISSQN = 26.43;

try {
    $c172 = new C172($std);
    echo "{$c172}".'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '|C172|7,74|10,32|26,43|<br>';
