<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\E500;

$std = new stdClass();
$std->IND_APUR = '1';
$std->DT_INI = 27092018;
$std->DT_FIN = 27102018;

try {
    $b0 = new E500($std);
    echo "{$b0}".'<br>';
    echo '|E500|1|27092018|27102018|<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}
