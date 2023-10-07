<?php

/**
 * Exemplo utilizacao Elemento A001
 */

error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\A001;

$std = new stdClass();
$std->IND_MOV = '1';

try {
$a001 = new A001($std);
echo "{$a001}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|A001|1|<br>';
