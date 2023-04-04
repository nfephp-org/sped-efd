<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\G140;

$std = new stdClass();
$std->NUM_ITEM = '657';
$std->COD_ITEM = '0490886314229219';

try {
$g140 = new G140($std);
echo "{$g140}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|G140|657|0490886314229219|<br>';
