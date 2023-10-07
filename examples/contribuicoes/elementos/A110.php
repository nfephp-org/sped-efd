<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\A110;

$std = new stdClass();
$std->COD_INF = '392048';
$std->TXT_COMPL = 'Complemento';

try {
$a110 = new A110($std);
echo "{$a110}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|A110|392048|Complemento|<br>';
