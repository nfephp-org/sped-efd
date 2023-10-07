<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C370;

$std = new stdClass();
$std->REG = 'GYM1';
$std->NUM_ITEM = '247';
$std->COD_ITEM = '33234';
$std->QTD = 308.4;
$std->UNID = 'K4DE9H';
$std->VL_ITEM = 70.30;
$std->VL_DESC = 64.18;

try {
    $c370 = new C370($std);
    echo "{$c370}".'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '|C370|GYM1|247|33234|308,400|K4DE9H|70,30|64,18|<br>';
