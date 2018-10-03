<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\C505;

$std = new stdClass();
$std->CST_COFINS = '55';
$std->VL_ITEM = 66.33;
$std->NAT_BC_CRED = '02';
$std->VL_BC_COFINS = 55.37;
$std->ALIQ_COFINS = 377.5;
$std->VL_COFINS = 7.47;
$std->COD_CTA = '93246592';

try {
$c505 = new C505($std);
echo "{$c505}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|C505|55|66,33|02|55,37|377,5000|7,47|93246592|<br>';
