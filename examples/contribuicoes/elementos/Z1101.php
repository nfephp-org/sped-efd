<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\Z1101;

$std = new stdClass();
$std->COD_PART = '2108137418495207';
$std->COD_ITEM = '8963063562099331';
$std->COD_MOD = '35';
$std->SER = '4USQ';
$std->SUB_SER = 'C2O';
$std->NUM_DOC = '578519738';
$std->DT_OPER = '04102018';
$std->CHV_NFE = '43171207364617000135550000000120141000120146';
$std->VL_OPER = 74.59;
$std->CFOP = '5270';
$std->NAT_BC_CRED = 'OT';
$std->IND_ORIG_CRED = '1';
$std->CST_PIS = '99';
$std->VL_BC_PIS = 73.70;
$std->ALIQ_PIS = 969.1;
$std->VL_PIS = 714.2267;
$std->COD_CTA = '8812347221591581';
$std->COD_CCUS = '0794694807403456';
$std->DESC_COMPL = '7A9WEE';
$std->PER_ESCRIT = '759243';
$std->CNPJ = '40814340000170';

try {
$z1101 = new Z1101($std);
echo "{$z1101}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|1101|2108137418495207|8963063562099331|35|4USQ|C2O|578519738|04102018|43171207364617000135550000000120141000120146|74,59|5270|OT|1|99|73,70|969,1000|714,23|8812347221591581|0794694807403456|7A9WEE|759243|40814340000170|<br>';
