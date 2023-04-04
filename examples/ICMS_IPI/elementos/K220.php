<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use \stdClass;
use NFePHP\EFD\Elements\ICMSIPI\K220;

$std = new stdClass();
$std->DT_MOV = '01102018';
$std->COD_ITEM_ORI = 'F142';
$std->COD_ITEM_DEST = 'X151';
$std->QTD_ORI = 201.23;
$std->QTD_DEST = 201.23;

try {
    $k1 = new K220($std);
    echo "{$k1}".'<br>';
    echo '|K220|01102018|F142|X151|201,230000|201,230000|<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}


