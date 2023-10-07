<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\M220;

$std = new stdClass();
$std->IND_AJ = '1';
$std->VL_AJ = 79.20;
$std->COD_AJ = '29';
$std->NUM_DOC = 'XYQVP5';
$std->DESCR_AJ = 'NDPHHU';
$std->DT_REF = '05102018';

try {
$m220 = new M220($std);
echo "{$m220}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|M220|1|79,20|29|XYQVP5|NDPHHU|05102018|
<br>';
