<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\C180;

$std = new stdClass();
$std->COD_MOD = '65';
$std->DT_DOC_INI = '02102018';
$std->DT_DOC_FIN = '02102018';
$std->COD_ITEM = '9859348793';
$std->COD_NCM = 'F2UPMU7I';
$std->EX_IPI = 'B4T';
$std->VL_TOT_ITEM = 95.85;

try {
$c180 = new C180($std);
echo "{$c180}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|C180|65|02102018|02102018|9859348793|F2UPMU7I|B4T|95,85|<br>';
