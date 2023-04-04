<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\M625;

$std = new stdClass();
$std->DET_VALOR_AJ = 569.1;
$std->CST_COFINS = '99';
$std->DET_BC_CRED = 220.3;
$std->DET_ALIQ = 280.2;
$std->DT_OPER_AJ = '05102018';
$std->DESC_AJ = 'V3YPC2';
$std->COD_CTA = '7131235849267550';
$std->INFO_COMPL = 'TRI8FR';

try {
$m625 = new M625($std);
echo "{$m625}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|M625|569,10|99|220,300|280,2000|05102018|V3YPC2|7131235849267550|TRI8FR|
<br>';
