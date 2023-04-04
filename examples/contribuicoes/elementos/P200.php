<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\P200;

$std = new stdClass();
$std->PER_REF = '469744';
$std->VL_TOT_CONT_APU = 18.7;
$std->VL_TOT_AJ_REDUC = 93.9;
$std->VL_TOT_AJ_ACRES = 58.66;
$std->VL_TOT_CONT_DEV = 95.79;
$std->COD_REC = '889015';

try {
$p200 = new P200($std);
echo "{$p200}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|P200|469744|18,70|93,90|58,66|95,79|889015|<br>';
