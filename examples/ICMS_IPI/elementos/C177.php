<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C177;

$std = new stdClass();
$std->COD_SELO_IPI = 'AS3324';
$std->QT_SELO_IPI = '51129718602';

try {
    $c177 = new C177($std);
    echo "{$c177}".'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '|C177|4Y89RF|51129718602|<br>';
