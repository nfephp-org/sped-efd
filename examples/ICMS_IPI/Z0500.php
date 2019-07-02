<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use \stdClass;
use NFePHP\EFD\Elements\ICMSIPI\Z0500;

$std = new stdClass();

$std->DT_ALT = '01012018';
$std->COD_NAT_CC = '01';
$std->IND_CTA = 'A';
$std->NIVEL = 3;
$std->COD_CTA = 'CA12324';
$std->NOME_CTA = 'Conta analitica';

try {
    $z0500 = new Z0500($std);
    echo "{$z0500}".'<br>';
    echo '|0500|01012018|01|A|3|CA1234|Conta analitica|<br>';
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}

