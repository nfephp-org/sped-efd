<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use \stdClass;
use NFePHP\EFD\Elements\ICMSIPI\Z0210;

$std = new stdClass();
$std->COD_ITEM_COMP = '12345';
$std->QTD_COMP = 123.35;
$std->PERDA = 4.003;

try {
    $z0210 = new Z0210($std);
    echo "{$z0210}".'<br>';
    echo '|0210|12345|123,350000|4,0030|<br>';
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}

