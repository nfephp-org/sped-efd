<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C610;

$std = new stdClass();
$std->COD_CLASS = 'WKM2';
$std->COD_ITEM = 'QXPR7N93155BX34W4E18P97219MTXKDL8R38PHISVY3DFJYTKKEWG07CSULC';
$std->QTD = 847;
$std->UNID = 'XWIBIK';
$std->VL_ITEM = 86.87;
$std->VL_DESC = 34.89;
$std->CST_ICMS = '748';
$std->CFOP = '9860';
$std->ALIQ_ICMS = 260.6;
$std->VL_BC_ICMS = 26.48;
$std->VL_ICMS = 33.82;
$std->VL_BC_ICMS_ST = 95.66;
$std->VL_ICMS_ST = 28.6;
$std->VL_PIS = 42.47;
$std->VL_COFINS = 6.54;
$std->COD_CTA = 'XR';

try {
$c610 = new C610($std);
echo "{$c610}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|C610|<br>';