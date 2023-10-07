<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\D605;

$std = new stdClass();
$std->COD_CLASS = '9856';
$std->VL_ITEM = 98.66;
$std->VL_DESC = 6.31;
$std->CST_COFINS = '99';
$std->VL_BC_COFINS = 49.13;
$std->ALIQ_COFINS = 372.5;
$std->VL_COFINS = 183.00925;
$std->COD_CTA = '3581474985594118';

try {
$d605 = new D605($std);
echo "{$d605}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|D605|9856|98,66|6,31|99|49,13|372,5000|183,01|3581474985594118|
<br>';
