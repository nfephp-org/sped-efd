<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\E240;

$std = new stdClass();
$std->COD_PART = '903843823283239201';
$std->COD_MOD = '10';
$std->SER = '2937';
$std->SUB = 908;
$std->NUM_DOC = 123456789;
$std->DT_DOC = 26092018;
$std->COD_ITEM = '1298734691249304236745';
$std->VL_AJ_ITEM = 12;
$std->CHV_DOCE = '39385934047573232345983451109836475612984034';

try {
    $b0 = new E240($std);
    echo "{$b0}".'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '|E240|903843823283239201|10|2937|908|123456789|26092018|1298734691249304236745|12|39385934047573232345983451109836475612984034|<br>';