<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\D501;

$std = new stdClass();
$std->CST_PIS = '99';
$std->VL_ITEM = 84.83;
$std->NAT_BC_CRED = '13';
$std->VL_BC_PIS = 47.97;
$std->ALIQ_PIS = 667.3;
$std->VL_PIS = 320.10381;
$std->COD_CTA = '7714302045086531';

try {
$d501 = new D501($std);
echo "{$d501}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|D501|99|84,83|13|47,97|667,3000|320,10|7714302045086531|<br>';
