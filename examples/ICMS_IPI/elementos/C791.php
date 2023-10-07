<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C791;

$std = new stdClass();
$std->UF = '21';
$std->VL_BC_ICMS_ST = 54.97;
$std->VL_ICMS_ST = 34.85;

try {
$c791 = new C791($std);
echo "{$c791}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|C791|21|54,97|34,85|<br>';
