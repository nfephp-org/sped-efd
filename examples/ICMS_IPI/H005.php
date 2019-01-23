<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use \stdClass;
use NFePHP\EFD\Elements\ICMSIPI\H005;

$std = new stdClass();
$std->DT_INV = '31102017'; 
$std->VL_INV = 3457892.939392882;
$std->MOT_INV = '01';

try {
    $b0 = new H005($std);
    echo "{$b0}".'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '|H005|31102017|3457892,94|01|<br>';
