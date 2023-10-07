<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use \stdClass;
use NFePHP\EFD\Elements\ICMSIPI\H010;

$std = new stdClass();
$std->COD_ITEM = 'ABC230';
$std->UNID = 'KG';
$std->QTD = 1234.50;
$std->VL_UNIT = 29.33;
$std->VL_ITEM = 36207.885;
$std->IND_PROP = 0;
$std->COD_PART = '12345678901234';
$std->TXT_COMPL = 'Texto complementar';
$std->COD_CTA = 'código da conta seilá';
$std->VL_ITEM_IR = 12345.987;


try {
    $b0 = new H010($std);
    echo "{$b0}".'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '|H010|ABC230|KG|1234,500|29,330000|36207,89|0|12345678901234|Texto complementar|codigo da conta seila|12345,99|<br>';
