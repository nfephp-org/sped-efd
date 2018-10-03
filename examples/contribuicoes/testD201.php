<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\D201;

$std = new stdClass();
$std->CST_PIS = '99';
$std->VL_ITEM = 35.99;
$std->VL_BC_PIS = 82.30;
$std->ALIQ_PIS = 67.2;
$std->VL_PIS = 55.3056;
$std->COD_CTA = '7259715549049483';

try {
$d201 = new D201($std);
echo "{$d201}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|D201|99|35,99|82,30|67,2000|55,31|7259715549049483|<br>';
