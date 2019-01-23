<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\Z1400;

$std = new stdClass();
$std->COD_ITEM_IPM = '1233';
$std->MUN = 2012333;
$std->VALOR = 12.12;

try {
    $b1 = new Z1400($std);
    echo "{$b1}".'<br>';
    echo '|1400|01012018|100.00|200.00|300.00|400.00|50.00|80.00|90.00|150.00|670.00|99.99|100.00|400.00|26.00|45.00|Observações|';
} catch (\Exception $e) {
    echo $e->getMessage();
}