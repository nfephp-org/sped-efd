<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\C880;

$std = new stdClass();
$std->COD_ITEM = '7781892605720456';
$std->CFOP = '7037';
$std->VL_ITEM = 80.63;
$std->VL_DESC = 87.40;
$std->CST_PIS = '99';
$std->QUANT_BC_PIS = 195.8;
$std->ALIQ_PIS_QUANT = 589.8;
$std->VL_PIS = 56.74;
$std->CST_COFINS = '99';
$std->QUANT_BC_COFINS = 423.5;
$std->ALIQ_COFINS_QUANT = 353;
$std->VL_COFINS = 77.62;
$std->COD_CTA = '1058280004224149';

try {
$c880 = new C880($std);
echo "{$c880}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|C880|7781892605720456|7037|80,63|87,40|99|195,800|589,8000|56,74|99|423,500|353,0000|77,62|1058280004224149|<br>';
