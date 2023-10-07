<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\C010;

$std = new stdClass();
$std->CNPJ = '40814340000170';
$std->IND_ESCRI = '8';

try {
$c010 = new C010($std);
echo "{$c010}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|C010|40814340000170|8|<br>';
