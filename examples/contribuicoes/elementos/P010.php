<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\P010;

$std = new stdClass();
$std->CNPJ = '40814340000170';

try {
$p010 = new P010($std);
echo "{$p010}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|P010|40814340000170|<br>';
