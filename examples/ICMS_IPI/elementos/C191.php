<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C191;

$std = new stdClass();
$std->VL_FCP_OP = 15.18;
$std->VL_FCP_ST = 48.26;
$std->VL_FCP_RET = 1.17;

try {
    $c191 = new C191($std);
    echo "{$c191}".'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '|C191|15,18|48,26|1,17|<br>';
