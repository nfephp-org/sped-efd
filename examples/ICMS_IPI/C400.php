<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C400;

$std = new stdClass();
$std->COD_MOD = '02';
$std->ECF_MOD = 'ssw2332';
$std->ECF_FAB = 'SRdds363274';
$std->ECF_CX = '323';

try {
    $c400 = new C400($std);
    echo "{$c400}".'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '|C400|02|ssw2332|SRdds363274|323|<br>';
