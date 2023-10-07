<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use \stdClass;
use NFePHP\EFD\Elements\ICMSIPI\K210;

$std = new stdClass();
$std->DT_INI_OS = '01102018';
$std->DT_FIN_OS = '08102018';
$std->COD_DOC_OS = '12345';
$std->COD_ITEM_ORI = '2103BCB00';
$std->QTD_ORI = 510.00;

try {
    $k1 = new K210($std);
    echo "{$k1}".'<br>';
    echo '|K210|01102018|08102018|12345|2103BCB00|510,000000|<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}


