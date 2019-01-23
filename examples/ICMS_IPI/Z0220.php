<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use \stdClass;
use NFePHP\EFD\Elements\ICMSIPI\Z0220;

$std = new stdClass();
$std->UNID_CONV = 'm';
$std->FAT_CONV = 0.25;

try {
    $z0220 = new Z0220($std);
    echo "{$z0220}".'<br>';
    echo '|0220|m|0,250000|<br>';
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}

