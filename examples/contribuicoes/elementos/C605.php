<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\C605;

$std = new stdClass();
$std->CST_COFINS = '73';
$std->VL_ITEM = 0.54;
$std->VL_BC_COFINS = 31.75;
$std->ALIQ_COFINS = 762.3;
$std->VL_COFINS = 242.03025;
$std->COD_CTA = '38749328479274298337';

try {
$c605 = new C605($std);
echo "{$c605}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|C605|73|0,54|31,75|762,3000|242,03|38749328479274298337|<br>';
