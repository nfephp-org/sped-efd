<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use \stdClass;
use NFePHP\EFD\Elements\ICMSIPI\K200;

$std = new stdClass();
$std->DT_EST = '01112016';
$std->COD_ITEM = '123456';
$std->QTD = 123.56;
$std->IND_EST = 0;
$std->COD_PART = null;

try {
    $k1 = new K200($std);
    echo "{$k1}".'<br>';
    echo '|K200|01112016|123456|123,560|0||<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}


