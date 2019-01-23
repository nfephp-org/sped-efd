<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\C395;

$std = new stdClass();
$std->COD_MOD = '2D';
$std->COD_PART = '20349857923';
$std->SER = 'YIG';
$std->SUB_SER = 'NO7';
$std->NUM_DOC = 'LM8XKH';
$std->DT_DOC = '02102018';
$std->VL_DOC = 46.47;

try {
$c395 = new C395($std);
echo "{$c395}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|C395|2D|20349857923|YIG|NO7|LM8XKH|02102018|46,47|<br>';
