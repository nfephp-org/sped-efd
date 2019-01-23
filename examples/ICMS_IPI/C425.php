<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C425;

$std = new stdClass();
$std->COD_ITEM = '2234343553256709';
$std->QTD = 635.2;
$std->UNID = 'DRN969';
$std->VL_ITEM = 21.82;
$std->VL_PIS = 62.61;
$std->VL_COFINS = 76.34;

try {
    $c425 = new C425($std);
    echo "{$c425}".'<br>';
    echo '|C425|2234343553256709|635,200|DRN969|21,82|62,61|76,34|<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}
