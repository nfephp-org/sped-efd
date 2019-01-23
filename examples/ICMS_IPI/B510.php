<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\B510;

$std = new stdClass();
$std->IND_PROF = '0';
$std->IND_ESC = '1';
$std->IND_SOC = '1';
$std->CPF = '15917200955';
$std->NOME = 'Marcos Paulo';

try {
    $b0 = new B510($std);
    echo "{$b0}".'<br>';
    echo '|B510|0|1|1|15917200955|Marcos Paulo|<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}