<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use \stdClass;
use NFePHP\EFD\Elements\ICMSIPI\Z0300;

$std = new stdClass();
$std->COD_IND_BEM = '320102003';
$std->IDENT_MERC = 2;
$std->DESCR_ITEM = 'Teste';
$std->COD_PRNC = 'A12345';
$std->COD_CTA = '2.1.2.333';
$std->NR_PARC = 2;

try {
    $z0300 = new Z0300($std);
    echo "{$z0300}".'<br>';
    echo '|0300|320102003|2|Teste|A12345|2.1.2.333|2|<br>';
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}
