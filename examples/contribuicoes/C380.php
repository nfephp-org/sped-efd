<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\C380;

$std = new stdClass();
$std->COD_MOD = '02';
$std->DT_DOC_INI = '02102018';
$std->DT_DOC_FIN = '02102018';
$std->NUM_DOC_INI = '775607';
$std->NUM_DOC_FIN = '265954';
$std->VL_DOC = 75.86;
$std->VL_DOC_CANC = 81.47;

try {
$c380 = new C380($std);
echo "{$c380}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|C380|02|02102018|02102018|775607|265954|75,86|81,47|<br>';
