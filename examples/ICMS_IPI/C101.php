<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C101;

$std = new stdClass();
$std->VL_FCP_UF_DEST = 10.00;
$std->VL_ICMS_UF_DEST = 40.00;
$std->VL_ICMS_UF_REM = 60.00;
try {
    $b0 = new C101($std);
    echo "{$b0}".'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '|C101|10|40|60|<br>';
