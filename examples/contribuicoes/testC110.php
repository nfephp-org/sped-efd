<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\C110;

$std = new stdClass();
$std->COD_INF = '333435';
$std->TXT_COMPL = 'Texto complementar';

try {
$c110 = new C110($std);
echo "{$c110}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|C110|333435|Texto complementar|<br>';
