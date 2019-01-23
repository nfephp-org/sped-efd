<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\C860;

$std = new stdClass();
$std->COD_MOD = '59';
$std->NR_SAT = '727354772';
$std->DT_DOC = '02102018';
$std->DOC_INI = '265446392';
$std->DOC_FIM = '63440132';

try {
$c860 = new C860($std);
echo "{$c860}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|C860|59|727354772|02102018|265446392|63440132|<br>';
