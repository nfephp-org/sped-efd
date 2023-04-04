<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once __DIR__ . '/../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\Z0221;

$std = new \stdClass();
$std->COD_ITEM_ATOMICO = '123456';
$std->QTD_CONTIDA = '2.000000';

try {
    $z0221 = new Z0221($std);
    echo "{$z0221}" . PHP_EOL;
    echo '|0221|123456|2,000000|' . PHP_EOL;
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}
