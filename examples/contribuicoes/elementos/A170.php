<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\A170;

$std = new stdClass();
$std->NUM_ITEM = '8415';
$std->COD_ITEM = '2384729387';
$std->DESCR_COMPL = 'PQZ275';
$std->VL_ITEM = 72.68;
$std->VL_DESC = 19.79;
$std->NAT_BC_CRED = '9H';
$std->IND_ORIG_CRED = '1';
$std->CST_PIS = '27';
$std->VL_BC_PIS = 67.7;
$std->ALIQ_PIS = 920.3;
$std->VL_PIS = 623.04;
$std->CST_COFINS = '81';
$std->VL_BC_COFINS = 96.38;
$std->ALIQ_COFINS = 514.4;
$std->VL_COFINS = 495.77872;
$std->COD_CTA = '94803034220394398203';
$std->COD_CCUS = '28635934';

try {
$a170 = new A170($std);
echo "{$a170}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|A170|8415|2384729387|PQZ275|72,68|19,79|9H|1|27|67,70|920,30|623,04|81|96,38|514,40|495,78|94803034220394398203|28635934|<br>';
