<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\C405;

$std = new stdClass();
$std->DT_DOC = '02102018';
$std->CRO = '957';
$std->CRZ = '225347';
$std->NUM_COO_FIN = '546409';
$std->GT_FIN = 629.3;
$std->VL_BRT = 66.51;

try {
$c405 = new C405($std);
echo "{$c405}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|C405|02102018|957|225347|546409|629,30|66,51|<br>';
