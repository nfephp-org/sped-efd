<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\D010;

$std = new stdClass();
$std->CNPJ = '40814340000170';

try {
$d010 = new D010($std);
echo "{$d010}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|D010|40814340000170|<br>';
