<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\ICMSIPI\C170;

$std = new stdClass();
$std->NUM_ITEM = '898';
$std->COD_ITEM = '22324';
$std->DESCR_COMPL = 'Descricao de teste';
$std->QTD = '7649';
$std->UNID = '2CN0EY';
$std->VL_ITEM = '6397';
$std->VL_DESC = '4070';
$std->IND_MOV = '1';
$std->CST_ICMS = '632';
$std->CFOP = '7656';
$std->COD_NAT = 'Z7ZPTMLRVL';
$std->VL_BC_ICMS = '357';
$std->ALIQ_ICMS = '918851';
$std->VL_ICMS = '1351';
$std->VL_BC_ICMS_ST = '7304';
$std->ALIQ_ST = '1259';
$std->VL_ICMS_ST = '5494';
$std->IND_APUR = '0';
$std->CST_IPI = '52';
$std->COD_ENQ = 'YK2';
$std->VL_BC_IPI = '868';
$std->ALIQ_IPI = '360729';
$std->VL_IPI = '2653';
$std->CST_PIS = '53';
$std->VL_BC_PIS = '5778';
$std->ALIQ_PIS = '60532345';
$std->QUANT_BC_PIS = '2262';
$std->ALIQ_PIS_R = '822';
$std->VL_PIS = '8883';
$std->CST_COFINS = '53';
$std->VL_BC_COFINS = '1039';
$std->ALIQ_COFINS = '598316';
$std->QUANT_BC_COFINS = '7437';
$std->ALIQ_COFINS_R = '9905';
$std->VL_COFINS = '131';
$std->COD_CTA = '3B';
$std->VL_ABAT_NT = '1233';

try {
    $c170 = new C170($std);
    echo "{$c170}".'<br>';
} catch (\Exception $e) {
    echo $e->getMessage();
}

echo '|C170|898|22324|Descricao de teste|7649,00000|2CN0EY|6397,00|4070,00|1|632|7656|Z7ZPTMLRVL|357,00|918851,00|1351,00|7304,00|1259,00|5494,00|0|52|YK2|868,00|360729,00|2653,00|53|5778,00|60532345,0000|2262,00|822,0000|8883,00|53|1039,00|598316,0000|7437,000|9905,0000|131,00|3B|1233,00|<br>';
