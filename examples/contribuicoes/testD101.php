<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\D101;

$std = new stdClass();
$std->IND_NAT_FRT = '1';
$std->VL_ITEM = 47.52;
$std->CST_PIS = '99';
$std->NAT_BC_CRED = '72';
$std->VL_BC_PIS = 21.32;
$std->ALIQ_PIS = 293.7;
$std->VL_PIS = 62.62;
$std->COD_CTA = '1829693438034305';

try {
$d101 = new D101($std);
echo "{$d101}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|D101|1|47,52|99|72|21,32|293,7000|62,62|1829693438034305|
<br>';
