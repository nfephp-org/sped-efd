<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\D505;

$std = new stdClass();
$std->CST_COFINS = '99';
$std->VL_ITEM = 63.46;
$std->NAT_BC_CRED = '3H';
$std->VL_BC_COFINS = 11.12;
$std->ALIQ_COFINS = 159.8;
$std->VL_COFINS = 17.76976;
$std->COD_CTA = '7592580552894442';

try {
$d505 = new D505($std);
echo "{$d505}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|D505|99|63,46|3H|11,12|159,8000|17,77|7592580552894442|<br>';
