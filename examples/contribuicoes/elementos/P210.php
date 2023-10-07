<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\P210;

$std = new stdClass();
$std->IND_AJ = '1';
$std->VL_AJ = 2.5;
$std->COD_AJ = '00';
$std->NUM_DOC = 'JURQ8Y';
$std->DESCR_AJ = 'WAJB25';
$std->DT_REF = '04102018';

try {
$p210 = new P210($std);
echo "{$p210}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|P210|1|2,50|00|JURQ8Y|WAJB25|04102018|<br>';
