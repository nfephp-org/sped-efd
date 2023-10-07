<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\C120;

$std = new stdClass();
$std->COD_DOC_IMP = '0';
$std->NUM_DOC_IMP = '18X2F3O1PB';
$std->VL_PIS_IMP = 3.19;
$std->VL_COFINS_IMP = 69.65;
$std->NUM_ACDRAW = '92384720';

try {
$c120 = new C120($std);
echo "{$c120}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|C120|0|18X2F3O1PB|3,19|69,65|92384720|<br>';
