<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\D609;

$std = new stdClass();
$std->NUM_PROC = '7DMO7T4B0EQ6DZXE3ZM9';
$std->IND_PROC = '1';

try {
$d609 = new D609($std);
echo "{$d609}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|D609|7DMO7T4B0EQ6DZXE3ZM9|1|<br>';
