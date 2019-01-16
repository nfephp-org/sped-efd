<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use \stdClass;
use NFePHP\EFD\Elements\ICMSIPI\K100;

$std = new stdClass();
$std->DT_INI = '30062008';
$std->DT_FIN = '30092008';

try {
    $k1 = new K100($std);
    echo "{$k1}".'<br>';
    echo '|K100|30062008|30092008|<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}


