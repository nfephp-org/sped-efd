<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\C170;

$std = new stdClass();
$std->NUM_ITEM = '786';
$std->COD_ITEM = '304975394';
$std->DESCR_COMPL = 'E21APW';
$std->QTD = 406.1;
$std->UNID = 'I4M0OP';
$std->VL_ITEM = 16.61;
$std->VL_DESC = 56.40;
$std->IND_MOV = '1';
$std->CST_ICMS = '999';
$std->CFOP = '2124';
$std->COD_NAT = 'IZCPI5AVN5';
$std->VL_BC_ICMS = 4.68;
$std->ALIQ_ICMS = 798.3;
$std->VL_ICMS = 84.26;
$std->VL_BC_ICMS_ST = 40.23;
$std->ALIQ_ST = 925.6;
$std->VL_ICMS_ST = 26.1;
$std->IND_APUR = '0';
$std->CST_IPI = '99';
$std->COD_ENQ = '9EW';
$std->VL_BC_IPI = 24.70;
$std->ALIQ_IPI = 1;
$std->VL_IPI = 0.84;
$std->CST_PIS = '99';
$std->VL_BC_PIS = 22.88;
$std->ALIQ_PIS = 642.4;
$std->QUANT_BC_PIS = 436.3;
$std->ALIQ_PIS_QUANT = 405.4;
$std->VL_PIS = 59.6;
$std->CST_COFINS = '99';
$std->VL_BC_COFINS = 65.42;
$std->ALIQ_COFINS = 929.1;
$std->QUANT_BC_COFINS = 304.3;
$std->ALIQ_COFINS_QUANT = 440.6;
$std->VL_COFINS = 134074.58;
$std->COD_CTA = '93879837298746278';

try {
$c170 = new C170($std);
echo "{$c170}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|C170|786|304975394|E21APW|406,10000|I4M0OP|16,61|56,40|1|999|2124|IZCPI5AVN5|4,68|798,30|84,26|40,23|925,60|26,10|0|99|9EW|24,70|1,00|0,84|99|22,88|642,4000|436,300|405,4000|59,60|99|65,42|929,1000|304,300|440,6000|134074,58|93879837298746278|<br>';
