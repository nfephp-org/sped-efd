<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use \stdClass;
use NFePHP\EFD\Elements\ICMSIPI\Z0205;

$std = new stdClass();
$std->DESCR_ANT_ITEM = 'Produto anterior descrito na nota fiscal';
$std->DT_INI = '01012005';
$std->DT_FIM = '01052008';
$std->COD_ANT_ITEM = '654321';

try {
    $z0205 = new Z0205($std);
    echo "{$z0205}".'<br>';
    echo '|0205|Produto anterior descrito na nota fiscal|01012005|01052008|654321|<br>';
} catch (InvalidArgumentException $e) {
    echo $e->getMessage();
}

