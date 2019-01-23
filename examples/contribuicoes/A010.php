<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\A010;

$std = new stdClass();
$std->CNPJ = '40814340000170';

try {
$a010 = new A010($std);
echo "{$a010}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|A010|40814340000170|<br>';
