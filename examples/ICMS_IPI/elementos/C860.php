<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C860;

$std = new stdClass();
$std->COD_MOD = 'E4';
$std->NR_SAT = '830342936';
$std->DT_DOC = '28092018';
$std->DOC_INI = '589277';
$std->DOC_FIM = '804575';

try {
$c860 = new C860($std);
echo "{$c860}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|C860|E4|830342936|28092018|589277|804575|<br>';
