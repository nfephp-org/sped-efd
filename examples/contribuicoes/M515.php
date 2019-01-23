<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
require_once '../../bootstrap.php';

use NFePHP\EFD\Elements\Contribuicoes\M515;

$std = new stdClass();
$std->DET_VALOR_AJ = 925.8;
$std->CST_COFINS = '99';
$std->DET_BC_CRED = 918.6;
$std->DET_ALIQ = 752.1;
$std->DT_OPER_AJ = '05102018';
$std->DESC_AJ = 'ISMP65';
$std->COD_CTA = '8430373854422739';
$std->INFO_COMPL = 'J83CY1';

try {
$m515 = new M515($std);
echo "{$m515}".'<br>';
} catch (\Exception $e) {
echo $e->getMessage();
}

echo '|M515|925,80|99|918,600|752,1000|05102018|ISMP65|8430373854422739|J83CY1|
<br>';
