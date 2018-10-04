<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\D205;

$std = new stdClass();
$std->CST_COFINS = '99';
$std->VL_ITEM = 97.40;
$std->VL_BC_COFINS = 0.1;
$std->ALIQ_COFINS = 722;
$std->VL_COFINS = 0.722;
$std->COD_CTA = '3360411095130296';

try {
$d205 = new D205($std);
echo "{$d205}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|D205|99|97,40|0,10|722,0000|0,72|3360411095130296|<br>';
