<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use \stdClass;
use NFePHP\EFD\Elements\ICMSIPI\K215;

$std = new stdClass();
$std->COD_ITEM_DES = '2103BCB00';
$std->QTD_DES = 500.00;

try {
    $k1 = new K215($std);
    echo "{$k1}".'<br>';
    echo '|K215|2103BCB00|500,000000|<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}


