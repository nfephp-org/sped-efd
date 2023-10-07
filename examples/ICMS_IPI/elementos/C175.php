<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C175;

$std = new stdClass();
$std->IND_VEIC_OPER = '3';
$std->CNPJ = '40814340000170';

try {
    $c175 = new C175($std);
    echo "{$c175}".'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '|C175|3|40814340000170|<br>';
