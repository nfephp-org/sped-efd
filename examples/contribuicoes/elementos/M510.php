<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\M510;

$std = new stdClass();
$std->IND_AJ = '0';
$std->VL_AJ = 22.88;
$std->COD_AJ = '65';
$std->NUM_DOC = 'CDH6CD';
$std->DESCR_AJ = '0FXJ54';
$std->DT_REF = '05102018';

try {
$m510 = new M510($std);
echo "{$m510}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|M510|0|22,88|65|CDH6CD|0FXJ54|05102018|
<br>';
