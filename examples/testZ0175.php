<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use \stdClass;
use NFePHP\EFD\Elements\ICMSIPI\Z0175;

$std = new stdClass();
$std->DT_ALT = '12082018';
$std->NR_CAMPO = '08';
$std->CONT_ANT = '3514536'; //campo 8 COD_MUN do registro 0150

try {
    $z0175 = new Z0175($std);
    echo "{$z0175}".'<br>';
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}

echo '|0175|12082018|08|3514536|<br>';
